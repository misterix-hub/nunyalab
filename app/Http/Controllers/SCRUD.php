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
                if(isset($data['media'])){
                    if(!isset($data['description'])) $data['description'] = '';
                    if (($_FILES['media']['name'] !== "")) {

                        $target_dir = "gallerie/";
                        $file = $_FILES['media']['name'];
                        $path = pathinfo($file);
                        $filename = time();
                        $ext = $path['extension'];

                        if ($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {
                            $temp_name = $_FILES['media']['tmp_name'];
                            $path_filename_ext = $target_dir . $filename . "." . $ext;

                            if (move_uploaded_file($temp_name, $path_filename_ext)) {
                                $query = $db->prepare("insert into gallerie(description, fichier, type_fichier) value(:description, :fichier, :type_fichier)");
                                if($query->execute([
                                   ':description' => $data['description'],
                                   ':fichier' => $filename.'.'.$ext,
                                   ':type_fichier' => $ext
                                ]))
                                    return NetworkCore::apiResponse('OK', 'ADDED_SUCCESSFULLY');
                            }
                        } else
                            return NetworkCore::apiResponse('ERROR', 'UNSUPPORTED_FILE');
                    }
                    return NetworkCore::apiResponse('ERROR', 'INTERNAL');
                } else {
                    return NetworkCore::apiResponse('ERROR', 'NO_DATA');
                }
            }
                break;

            case 'partenaire': {
                if(isset($data['logo'])){
                    if(!isset($data['site_web'])) $data['site_web'] = '';
                    if (($_FILES['logo']['name'] !== "")) {

                        $target_dir = "partenaire/";
                        $file = $_FILES['logo']['name'];
                        $path = pathinfo($file);
                        $filename = time();
                        $ext = $path['extension'];

                        if ($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {
                            $temp_name = $_FILES['logo']['tmp_name'];
                            $path_filename_ext = $target_dir . $filename . "." . $ext;

                            if (move_uploaded_file($temp_name, $path_filename_ext)) {
                                $query = $db->prepare("insert into partenaire(logo, site_web) value(:logo, :site_web)");
                                if($query->execute([
                                    ':logo' => $filename.'.'.$ext,
                                    ':site_web' => $data['site_web']
                                ]))
                                    return NetworkCore::apiResponse('OK', 'ADDED_SUCCESSFULLY');
                            }
                        } else
                            return NetworkCore::apiResponse('ERROR', 'UNSUPPORTED_FILE');
                    }
                    return NetworkCore::apiResponse('ERROR', 'INTERNAL');
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

    public function update(Request $request, $item, $id){}

    public function delete(Request $request, $item, $id){
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

            if($db->query('delete from '.$table." where id=".$id) !== false){
                return NetworkCore::apiResponse('OK', '', 'DELETED');
            }

            return NetworkCore::apiResponse('ERROR', 'INTERNAL_ERROR');
        }

        return NetworkCore::apiResponse('ERROR', 'BAD_REQUEST');
    }
}
