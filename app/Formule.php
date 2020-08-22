<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formule extends Model
{
    protected $table = 'formules';

    protected $primaryKey = 'id_formule';

    public $timestamps = false;

    protected $fillable = ['libelle_formule	', 'frais_medicaux', 'frais_invalidite', 'frais_deces', 'prime_nette', 'accessoire', 'prime_ttc'];
}
