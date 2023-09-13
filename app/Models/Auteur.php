<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    //
    protected $table = "auteurs";

    protected $primaryKey = "id_auteur";

    public $timestamps = false;

    protected $fillable = [
        "nom_auteur",
        "prenom_auteur"
    ];
}
