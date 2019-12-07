<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Projet;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.projet.liste', [
            'projets' => Projet::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projet.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (($_FILES['logo']['name']!="")){
        
            $target_dir = "db/projets/";
            $file = $_FILES['logo']['name'];
            $path = pathinfo($file);
            $filename = time();
            $ext = strtolower($path['extension']);

            if($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {
                $temp_name = $_FILES['logo']['tmp_name'];
                $path_filename_ext = $target_dir.$filename.".".$ext;
                
                if (move_uploaded_file($temp_name,$path_filename_ext)) {

                    $projet = new Projet;
                    $projet->nom = $request->nom;
                    $projet->logo = $path_filename_ext;
                    $projet->description = $request->description;
                    $projet->save();

                    return back()->with('success', 'Projet ajouté avec succèss !');
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
        $projets = Projet::where('id', $id)->get();

        if (count($projets) == 0) {
            abort('404');
        } else {
            return view('admin.projet.details', [
                'projets' => $projets
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

        $projets = Projet::where('id', $id)->get();

        if (count($projets) == 0) {
            abort('404');
        } else {
            return view('admin.projet.modifier', [
                'projets' => $projets
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
        $projet = Projet::findOrFail($id);
        $projet->nom = $request->nom;
        $projet->description = $request->description;

        if (($_FILES['logo']['name']!="")){
        
            $target_dir = "db/projets/";
            $file = $_FILES['logo']['name'];
            $path = pathinfo($file);
            $filename = time();
            $ext = strtolower($path['extension']);

            if($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {
                $temp_name = $_FILES['logo']['tmp_name'];
                $path_filename_ext = $target_dir.$filename.".".$ext;
                
                if (move_uploaded_file($temp_name,$path_filename_ext)) {

                    $projet->logo = $path_filename_ext;

                } else {
                    return back()->with('error', 'Erreur de source iconnue. Réessayez !');
                }
            } else {
                return back()->with('error', 'Type de fichier non supporté !');
            }
        }
        
        $projet->save();
        return back()->with('success', 'Projet mis à jour avec succèss !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (count(Projet::where('id', $id)->get()) == 0) {
            abort('404');
        } else {
            $projet = Projet::findOrFail($id);
            $projet->delete();
            return back()->with('success', "Projet supprimée avec succès !");
        }
    }
}
