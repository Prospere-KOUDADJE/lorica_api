<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Utilisateur;
use App\Personne;
use App\Loricauser;

class Utilisateurs extends Controller
{
    public function createPersonne(Request $request){
        $personne = new Personne();
        $utilisateur = new Utilisateur();

        //Creation de personne
        $personne->nom = $request->nom;
        $personne->prenom = $request->prenom;
        $personne->sexe = $request->sexe;
        $personne->telephone = $request->telephone;
        $personne->adresse = $request->adresse;
        //saving
        $personne->save();
        
        //creation de l'utilisateur correspondant
        $utilisateur->email = $request->email;
        $utilisateur->password = $request->password;
        $utilisateur->fonction = $request->fonction;
        $utilisateur->autorisation = $request->autorisation;
        $utilisateur->id_personne = $personne->id_personne;
        //saving
        $utilisateur->save();


        return response()->json($utilisateur);
    }

    //UPDATE TABLE UTILISATEURS
    public function updateUtilisateur($id_utilisateur, Request $request){
        //update email
        if ($request->email!=null) {
            Utilisateur::where('id_utilisateur', $id_utilisateur)
                ->update(['email'=>$request->email]);
        }

        //update password
        if ($request->password!=null) {
            Utilisateur::where('id_utilisateur', $id_utilisateur)
                ->update(['password'=>$request->password]);
        }

        //update fonction
        if ($request->fonction!=null) {
            Utilisateur::where('id_utilisateur', $id_utilisateur)
                ->update(['fonction'=>$request->fonction]);
        }

        //update autorisation
        if ($request->autorisation!=null) {
            Utilisateur::where('id_utilisateur', $id_utilisateur)
                ->update(['autorisation'=>$request->autorisation]);
        }
        
        $utilisateur = Utilisateur::where('id_utilisateur',$id_utilisateur)->get();
        return $utilisateur;
    }

    //UPDATE TABLE PERSONNES
    public function updatePersonne($id_personne, Request $request){
        //update nom
        if ($request->nom!=null) {
            Personne::where('id_personne', $id_personne)
                ->update(['nom'=>$request->nom]);
        }

        //update prenom
        if ($request->prenom!=null) {
            Personne::where('id_personne', $id_personne)
                ->update(['prenom'=>$request->prenom]);
        }

        //update sexe
        if ($request->sexe!=null) {
            Personne::where('id_personne', $id_personne)
                ->update(['sexe'=>$request->sexe]);
        }

        //update telephone
        if ($request->telephone!=null) {
            Personne::where('id_personne', $id_personne)
                ->update(['telephone'=>$request->telephone]);
        }

        //update adresse
        if ($request->adresse!=null) {
            Personne::where('id_personne', $id_personne)
                ->update(['adresse'=>$request->adresse]);
        }


        $personne = Personne::where('id_personne',$id_personne)->get();
        return $personne;
    }

    //GET ALL USERS
    public function getUtilisateurs(){
        $loricausers = Loricauser::all();

        return $loricausers;
    }

    //GET ONE USER
    public function oneUtilisateur($id_personne){
        $loricauser = Loricauser::where('id_personne',$id_personne)->get();

        return $loricauser;
    }

    //Authentification
    public function authentification(Request $request){

        $loricauser = Loricauser::where(['email'=>$request->email, 'password'=>$request->password])->get();

        return $loricauser;
    }

    public function deleteUtilisateur($id_personne){
        $personne = Personne::find($id_personne);
        $personne->delete();

        return $personne;
    }
}
