<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;
use App\Repository\LivreRepository;

class LivreController extends Controller
{
    public function getLivres(){
        return LivreRepository::GetLivre();
    }

    public function getLivre($id){
        return LivreRepository::GetFindLivre($id);
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
        $auteur = LivreRepository::GetFindLivre($id);

        LivreRepository::UpdateLivre($auteur, $request);

        return $livre;
    }

    public function DeleteLivre($id) {
        LivreRepository::DeleteLivre($id);
    }
}
