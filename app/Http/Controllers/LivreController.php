<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function getLivres(){
        return Livre::all();
    }

    public function getLivre($id){
        return Livre::findOrFail($id);
    }

    public function createLivre(Request $request){
        $livre = Livre::create([
            "id_auteur" => $request->id_auteur,
            "tit_livre" =>  $request->tit_livre,
            "page_livre" =>  $request->page_livre,
            "edit_livre" =>  $request->edit_livre
        ]);

        return $livre;
    }

    public function updateLivre($id, Request $request){
        $livre = Livre::findOrFail($id);

        $livre->update([
            "id_auteur" => $request->id_auteur,
            "tit_livre" =>  $request->tit_livre,
            "page_livre" =>  $request->page_livre,
            "edit_livre" =>  $request->edit_livre
        ]);

        return $livre;
    }

}
