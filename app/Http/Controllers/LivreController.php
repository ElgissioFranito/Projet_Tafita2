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
        return LivreRepository::createLivre($request);
    }

    public function updateLivre($id, Request $request){
        $livre = LivreRepository::GetFindLivre($id);
        LivreRepository::UpdateLivre($livre, $request);
        return $livre;
    }

    public function DeleteLivre($id) {
        LivreRepository::DeleteLivre($id);
        return "creating success";
    }
}
