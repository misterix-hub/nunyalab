<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Galerie;

class GalerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.galerie.liste', [
            'images' => Galerie::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galerie.ajouter');
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
        
            $target_dir = "db/images/";
            $file = $_FILES['image']['name'];
            $path = pathinfo($file);
            $filename = time();
            $ext = strtolower($path['extension']);

            if($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext =='mp4') {
                $temp_name = $_FILES['image']['tmp_name'];
                $path_filename_ext = $target_dir.$filename.".".$ext;
                
                if (move_uploaded_file($temp_name,$path_filename_ext)) {

                    $image = new Galerie;
                    $image->titre = $request->titre;
                    $image->photo = $path_filename_ext;
                    $image->description = $request->description;
                    $image->save();

                    return back()->with('success', 'Image ajoutée avec succèss !');
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
        $images = Galerie::where('id', $id)->get();

        if (count($images) == 0) {
            abort('404');
        } else {
            return view('admin.galerie.details', [
                'images' => $images
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
        $images = Galerie::where('id', $id)->get();

        if (count($images) == 0) {
            abort('404');
        } else {
            return view('admin.evenement.modifier', [
                'images' => $images
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
        $image = Galerie::findOrFail($id);
        $image->titre = $request->titre;
        $image->description = $request->description;

        if (($_FILES['image']['name']!="")){
        
            $target_dir = "db/images/";
            $file = $_FILES['image']['name'];
            $path = pathinfo($file);
            $filename = time();
            $ext = strtolower($path['extension']);

            if($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {
                $temp_name = $_FILES['image']['tmp_name'];
                $path_filename_ext = $target_dir.$filename.".".$ext;
                
                if (move_uploaded_file($temp_name,$path_filename_ext)) {

                    $image->photo = $path_filename_ext;

                } else {
                    return back()->with('error', 'Erreur de source iconnue. Réessayez !');
                }
            } else {
                return back()->with('error', 'Type de fichier non supporté !');
            }
        }
        
        $image->save();

        return back()->with('success', 'Image ajoutée avec succèss !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (count(Galerie::where('id', $id)->get()) == 0) {
            abort('404');
        } else {
            $image = Galerie::findOrFail($id);
            $image->delete();
            return back()->with('success', "Image supprimée avec succès !");
        }
        
    }
}
