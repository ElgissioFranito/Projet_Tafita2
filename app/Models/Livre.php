<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $table = "livres";

    protected $primaryKey = "id_livre";

    public $timestamps = false;

    protected $fillable = [
        "id_auteur",
        "tit_livre",
        "page_livre",
        "edit_livre"
    ];

}
