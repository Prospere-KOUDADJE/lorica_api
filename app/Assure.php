<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assure extends Model
{
    protected $table = 'assures';
    
    protected $primaryKey = 'id_assure';

    public $timestamps = false;

    protected $fillable = ['age', 'date_naissance', 'lieu_naissance', 'profession', 'nationalite', 'id_personne'];
}
