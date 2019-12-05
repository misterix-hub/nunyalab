<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Evenement;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.evenement.liste', [
            'evenements' => Evenement::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.evenement.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (($_FILES['image']['name']!="")){
        
            $target_dir = "db/evenements/";
            $file = $_FILES['image']['name'];
            $path = pathinfo($file);
            $filename = time();
            $ext = $path['extension'];

            if($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {
                $temp_name = $_FILES['image']['tmp_name'];
                $path_filename_ext = $target_dir.$filename.".".$ext;
                
                if (move_uploaded_file($temp_name,$path_filename_ext)) {

                    $evenement = new Evenement;
                    $evenement->titre = $request->titre;
                    $evenement->banniere = $path_filename_ext;
                    $evenement->description = $request->description;
                    $evenement->save();

                    return back()->with('success', 'ÉVènement ajouté avec succèss !');
                } else {
                    return back()->with('error', 'Erreur de source iconnue. Réessayez !');
                }
            } else {
                return back()->with('error', 'Type de fichier non supporté !');
            }
        } else {
            return back()->with('error', 'Erreur de source iconnue. Réessayez !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evenements = Evenement::where('id', $id)->get();

        if (count($evenements) == 0) {
            abort('404');
        } else {
            return view('admin.evenement.details', [
                'evenements' => $evenements
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evenements = Evenement::where('id', $id)->get();

        if (count($evenements) == 0) {
            abort('404');
        } else {
            return view('admin.evenement.modifier', [
                'evenements' => $evenements
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $evenement = Evenement::findOrFail($id);
        $evenement->titre = $request->titre;
        $evenement->description = $request->description;

        if (($_FILES['image']['name']!="")){
        
            $target_dir = "db/evenements/";
            $file = $_FILES['image']['name'];
            $path = pathinfo($file);
            $filename = time();
            $ext = $path['extension'];

            if($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {
                $temp_name = $_FILES['image']['tmp_name'];
                $path_filename_ext = $target_dir.$filename.".".$ext;
                
                if (move_uploaded_file($temp_name,$path_filename_ext)) {

                    $evenement->banniere = $path_filename_ext;

                } else {
                    return back()->with('error', 'Erreur de source iconnue. Réessayez !');
                }
            } else {
                return back()->with('error', 'Type de fichier non supporté !');
            }
        }
        
        $evenement->save();

        return back()->with('success', 'ÉVènement ajouté avec succèss !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (count(Evenement::where('id', $id)->get()) == 0) {
            abort('404');
        } else {
            $evenement = Evenement::findOrFail($id);
            $evenement->delete();
            return back()->with('success', "Évènement supprimé avec succès !");
        }
        
    }
}
