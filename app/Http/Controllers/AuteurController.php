<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use App\Repository\AuteurRepository;
use Illuminate\Http\Request;

class AuteurController extends Controller
{
    public function GetAuteur()
    {
        return AuteurRepository::GetAuteur();
    }

    public function GetFindAuteur($id)
    {
        return AuteurRepository::GetFindAuteur($id);
    }

    public function CreateAuteur(request $request)
    {
        AuteurRepository::CreateAuteur($request);
    }

    public function UpdateAuteur($id, Request $request)
    {
        $auteur = AuteurRepository::GetFindAuteur($id);

        AuteurRepository::UpdateAuteur($auteur, $request);

        return $auteur;
    }

    public function deleteAuteur($id)
    {
        AuteurRepository::deleteAuteur($id);

        return "success!";
    }
}
