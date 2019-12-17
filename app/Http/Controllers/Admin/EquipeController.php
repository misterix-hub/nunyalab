<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MembreEquipe;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.equipe.liste', [
            'equipes' => MembreEquipe::orderBy('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.equipe.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (($_FILES['photo']['name']!="")){
        
            $target_dir = "db/equipes/";
            $file = $_FILES['photo']['name'];
            $path = pathinfo($file);
            $filename = time();
            $ext = strtolower($path['extension']);

            if($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {
                $temp_name = $_FILES['photo']['tmp_name'];
                $path_filename_ext = $target_dir.$filename.".".$ext;
                
                if (move_uploaded_file($temp_name,$path_filename_ext)) {

                    $membreEquipe = new MembreEquipe;
                    $membreEquipe->nom = $request->nom;
                    $membreEquipe->prenom = $request->prenom;
                    $membreEquipe->photo = $path_filename_ext;
                    $membreEquipe->type_equipe = $request->type_equipe;
                    $membreEquipe->email = $request->email;
                    $membreEquipe->facebook = $request->facebook;
                    $membreEquipe->whatsapp = $request->whatsapp;
                    $membreEquipe->telephone = $request->telephone;
                    $membreEquipe->biographie = $request->bio;
                    $membreEquipe->save();

                    return back()->with('success', 'Membre ajouté(e) avec succèss !');
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
        $equipes = MembreEquipe::where('id', $id)->get();

        if (count($equipes) == 0) {
            abort('404');
        } else {
            return view('admin.equipe.details', [
                'equipes' => $equipes
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
        $equipes = MembreEquipe::where('id', $id)->get();

        if (count($equipes) == 0) {
            abort('404');
        } else {
            return view('admin.equipe.modifier', [
                'equipes' => $equipes
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
        $membreEquipe = MembreEquipe::findOrFail($id);
        $membreEquipe->nom = $request->nom;
        $membreEquipe->prenom = $request->prenom;
        $membreEquipe->type_equipe = $request->type_equipe;
        $membreEquipe->email = $request->email;
        $membreEquipe->facebook = $request->facebook;
        $membreEquipe->whatsapp = $request->whatsapp;
        $membreEquipe->telephone = $request->telephone;
        $membreEquipe->biographie = $request->bio;
        

        if (($_FILES['photo']['name']!="")){
        
            $target_dir = "db/equipes/";
            $file = $_FILES['photo']['name'];
            $path = pathinfo($file);
            $filename = time();
            $ext = strtolower($path['extension']);

            if($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {
                $temp_name = $_FILES['photo']['tmp_name'];
                $path_filename_ext = $target_dir.$filename.".".$ext;
                
                if (move_uploaded_file($temp_name,$path_filename_ext)) {
                    $membreEquipe->photo = $path_filename_ext;
                } else {
                    return back()->with('error', 'Erreur de source iconnue. Réessayez !');
                }
            } else {
                return back()->with('error', 'Type de fichier non supporté !');
            }
        }
        $membreEquipe->save();
        return back()->with('success', 'Membre mise à jour avec succèss !');
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
            $membreEquipe = MembreEquipe::findOrFail($id);
            $membreEquipe->delete();
            return back()->with('success', "Membre qupprimée avec succès !");
        }
    }
}
