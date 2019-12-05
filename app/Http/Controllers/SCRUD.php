<?php


namespace App\Http\Controllers;

use App\NunyaLab\NetworkCore;
use App\Ova\Php\Bdd\DB;
use Illuminate\Http\Request;

class SCRUD extends Controller
{
    public function search(Request $request, $query){}

    public function create(Request $request, $item){
        $data = $request->all();
        $db = new DB(DB::DB_PARAMS);

        switch ($item){
            case 'contact': {
                if(isset($data['libelle']) && isset($data['contact'])){
                    $query = $db->prepare('insert into Contact(icone, libelle, contact) value(:icone, :libelle, :contact)');
                    if($query->execute(array(
                        ':icone' => $data['icone'],
                        ':libelle' => $data['libelle'],
                        ':contact' => $data['contact']
                        )))
                    {
                        return NetworkCore::apiResponse('OK', 'ADDED_SUCCESSFULLY', json_encode([
                            'id' => $db->executeForArray('select id from contact where icone=:icone and libelle=:libelle and contact=:contact', [
                                ':icone' => $data['icone'],
                                ':libelle' => $data['libelle'],
                                ':contact' => $data['contact']
                            ])[0]['id']
                        ]));
                    }

                    return NetworkCore::apiResponse('ERROR', 'INTERNAL_ERROR');
                } else {
                    return NetworkCore::apiResponse('ERROR', 'NO_DATA');
                }
            }
                break;

            case 'gallerie': {
                if(isset($data['fichier'])){
                    return NetworkCore::apiResponse('OK', 'ADDED_SUCCESSFULLY');
                } else {
                    return NetworkCore::apiResponse('ERROR', 'NO_DATA');
                }
            }
                break;

            case 'partenaire': {
                if(isset($data['logo'])){
                    return NetworkCore::apiResponse('OK', 'ADDED_SUCCESSFULLY');
                } else {
                    return NetworkCore::apiResponse('ERROR', 'NO_DATA');
                }
            }
                break;
        }

        return NetworkCore::apiResponse('ERROR', 'BAD_REQUEST');
    }

    public function read($item, $id = -1){
        $table = '';

        switch ($item){
            case 'contact': {
                $table = 'Contact';
            }
                break;
            case 'gallerie': {
                $table = 'Gallerie';
            }
                break;
            case 'partenaire': {
                $table = 'Partenaire';
            }
                break;
        }


        if(!empty($table)){
            $db = new DB(DB::DB_PARAMS);

            if(($arr = $db->executeForArray('select * from '.$table.($id > -1 ? ' where id='.$id:''))) !== false){
                return NetworkCore::apiResponse('OK', '', json_encode($arr));
            }

            return NetworkCore::apiResponse('ERROR', 'INTERNAL_ERROR');
        }

        return NetworkCore::apiResponse('ERROR', 'BAD_REQUEST');
    }

    public function update(Request $request, $id){}

    public function delete(Request $request, $id){}
}
