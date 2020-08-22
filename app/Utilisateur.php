<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    //Table name
    protected $table = 'utilisateurs';

    //primary Key name
    protected $primaryKey = 'id_utilisateur';

    //pas d'attribue update_at et create_at
    public $timestamps = false;

    //attribue
    protected $fillabe = ['email', 'password', 'fonction', 'autorisation', 'id_personne'];
}
