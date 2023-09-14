<?php

namespace App\Repository;

use App\Models\Auteur;

class AuteurRepository {
    public static function GetAuteur()
    {
        return Auteur::all();
    }

    public static function GetFindAuteur($id)
    {
        return Auteur::findOrFail($id);
    }

    public static function CreateAuteur($request)
    {
        Auteur::create([
            "nom_auteur" => $request->nom_auteur,
            "prenom_auteur" => $request->prenom_auteur
        ]);
    }

    public static function UpdateAuteur($auteur, $request)
    {
        $auteur->update([
            "nom_auteur" => $request->nom_auteur,
            "prenom_auteur" => $request->prenom_auteur
        ]);
    }

    public static function deleteAuteur($id)
    {
        Auteur::destroy($id);
    }

}