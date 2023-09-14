<?php

namespace App\Repository;
use App\Models\Livre;

class LivreRepository {
    public static function GetLivre() {
        return Livre::all();
    }

    public static function GetFindLivre($id) {
        return Livre::findOrFail($id);
    }

    public static function UpdateLivre($livre, $request) {
        $livre->update([
            "id_auteur" => $request->id_auteur,
            "tit_livre" =>  $request->tit_livre,
            "page_livre" =>  $request->page_livre,
            "edit_livre" =>  $request->edit_livre
        ]);
    }

    public static function DeleteLivre($id) {
        Livre::destroy($id);

        return "deleting success!";
    }

    public static function createLivre(){
        Livre::create([
            "id_auteur" => $request->id_auteur,
            "tit_livre" =>  $request->tit_livre,
            "page_livre" =>  $request->page_livre,
            "edit_livre" =>  $request->edit_livre
        ]);

        return "creating success";
    }
}