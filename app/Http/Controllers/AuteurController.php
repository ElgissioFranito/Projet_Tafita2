<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use Illuminate\Http\Request;

class AuteurController extends Controller
{
    //
    public function GetAuteur(){
        return Auteur::all();
    }

    public function GetFindAuteur($id){
        return Auteur::findOrFail($id);
    }

    public function CreateAuteur(request $request){
        $auteur = Auteur::create([
            "nom_auteur" => $request -> nom_auteur,
            "prenom_auteur" => $request -> prenom_auteur
        ]);
    }

    public function UpdateAuteur($id, Request $request){
        $auteur = Auteur::findOrFail($id);

        $auteur->update([
            "nom_auteur" => $request -> nom_auteur,
            "prenom_auteur" => $request -> prenom_auteur
        ]);

        return $auteur;
    }
}
