<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\APropos;

class MainController extends Controller
{
    public function dashboard() {
        return view('admin.index');
    }

    public function aPropos() {
        return view('admin.aPropos', [
            'aPropos' => APropos::all()
        ]);
    }

    public function aProposForm(Request $request, $id) {
        
        $aPropos = APropos::findOrFail($id);
        $aPropos->texte = $request->texte;
        $aPropos->save();

        return back()->with('success', "Sauvegarde effectuée avec succès !");
    }
}
