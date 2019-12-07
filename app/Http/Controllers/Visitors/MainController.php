<?php

namespace App\Http\Controllers\Visitors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\MembreEquipe;
use App\Projet;
use App\Evenement;
use App\APropos;

class MainController extends Controller
{
    public function index() {
        return view('visitors.index', [
            "equipes" => MembreEquipe::orderBy('id')->limit(3)->get(),
            "projets" => Projet::all(),
            "evenements" => Evenement::orderByDesc('id')->limit(4)->get(),
            "aPropos" => APropos::all()
        ]);
    }

    public function evenement($id) {
        
        $evenements = Evenement::where('id', $id)->get();

        if (count($evenements) == 0) {
            abort('404');
        } else {
            return view('visitors.evenement.details', [
                'evenements' => $evenements,
                'listeEvenements' => Evenement::orderByDesc('id')->limit(3)->get()
            ]);
        }
        
    }

    public function projet($id) {

        $projets = Projet::where('id', $id)->get();

        if (count($projets) == 0) {
            abort('404');
        } else {
            return view('visitors.projet.details', [
                'projets' => $projets,
                'listeProjets' => Projet::orderByDesc('id')->limit(3)->get()
            ]);
        }
    }
}
