<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $table = 'classes';

    protected $primaryKey = 'id_classe';

    public $timestamps = false;

    protected $fillable = ['libelle_classe	', 'frais_classe', 'pourcentage_classe'];
}
