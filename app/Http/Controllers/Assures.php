<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Personne;
use App\Assure;
use App\Loricaassure;

class Assures extends Controller
{
    public function addAssure(){
        $personne = new Personne();
        $Assure = new Assure();

        //Creation de personne
        $personne->nom = $request->nom;
        $personne->prenom = $request->prenom;
        $personne->sexe = $request->sexe;
        $personne->telephone = $request->telephone;
        $personne->adresse = $request->adresse;
        //saving
        $personne->save();
        
        //creation de l'assure correspondant
        $assure->age = $request->age;
        $assure->date_naissance = $request->date_naissance;
        $assure->lieu_naissance = $request->lieu_naissance;
        $assure->profession = $request->profession;
        $assure->nationnalite = $request->nattionalite;
        $assure->id_personne = $personne->id_personne;
        //saving
        $utilisateur->save();


        return response()->json($utilisateur);

    }

    public function getAssures(){
        $loricaassure = Loricaassure::all();

        return $loricaassure;
    }

    public function getOneAssure($id_assure){

    }

    public function updateAssure($id_assure){

    }

    public function deleteAssure($id_assure){

    }
}
