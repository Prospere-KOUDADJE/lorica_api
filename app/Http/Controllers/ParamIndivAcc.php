<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classe;
use App\Formule;

class ParamIndivAcc extends Controller
{
    public function addClasse(Request $request){
        $classe = new Classe();

        //Creation de personne
        $classe->libelle_classe = $request->libelle_classe;
        $classe->frais_classe = $request->frais_classe;
        $classe->pourcentage_classe = $request->pourcentage_classe;
        //saving
        $classe->save();
        
        return $classe;
    }

    public function addFormule(Request $request){
        $formule = new Formule();

        //Creation de personne
        $formule->libelle_formule = $request->libelle_formule;
        $formule->frais_medicaux = $request->frais_medicaux;
        $formule->frais_invalidite = $request->frais_invalidite;
        $formule->frais_deces = $request->frais_deces;
        $formule->prime_nette = $request->prime_nette;
        $formule->accessoire = $request->accessoire;
        $formule->prime_ttc = $request->prime_ttc;
        //saving
        $formule->save();
        
        return $formule;
    }

    public function getClasses(){
        $classe = Classe::all();

        return $classe;
    }
    public function getFormule(){
        $formule = Formule::all();

        return $formule;
    }

    public function getOneClasse($id_classe){
        $classe = Classe::where('id_classe',$id_classe)->get();

        return $classe;
    }

    public function getOneFormule($id_formule){
        $formule = Formule::where('id_formule',$id_formule)->get();

        return $formule;
    }

    public function updateClasse($id_classe, Request $request){
        if ($request->libelle_classe!=null) {
            Classe::where('id_classe', $id_classe)
                ->update(['libelle_classe'=>$request->libelle_classe]);
        }
        if ($request->frais_classe!=null) {
            Classe::where('id_classe', $id_classe)
                ->update(['frais_classe'=>$request->frais_classe]);
        }
        if ($request->pourcentage_classe!=null) {
            Classe::where('id_classe', $id_classe)
                ->update(['pourcentage_classe'=>$request->pourcentage_classe]);
        }

        $classe = Classe::where('id_classe',$id_classe)->get();
        return $classe;
    }

    public function updateFormule($id_formule, Request $request){
        if ($request->libelle_formule!=null) {
            Formules::where('id_formule', $id_formule)
                ->update(['libelle_formule'=>$request->libelle_formule]);
        }
        if ($request->frais_medicaux!=null) {
            Formules::where('id_formule', $id_formule)
                ->update(['frais_medicaux'=>$request->frais_medicaux]);
        }
        if ($request->frais_invalidite!=null) {
            Formules::where('id_formule', $id_formule)
                ->update(['frais_invalidite'=>$request->frais_invalidite]);
        }
        if ($request->frais_deces!=null) {
            Formules::where('id_formule', $id_formule)
                ->update(['frais_deces'=>$request->frais_deces]);
        }
        if ($request->prime_nette!=null) {
            Formules::where('id_formule', $id_formule)
                ->update(['prime_nette'=>$request->prime_nette]);
        }
        if ($request->accessoire!=null) {
            Formules::where('id_formule', $id_formule)
                ->update(['accessoire'=>$request->accessoire]);
        }
        if ($request->prime_ttc!=null) {
            Formules::where('id_formule', $id_formule)
                ->update(['prime_ttc'=>$request->prime_ttc]);
        }

        $formule = Formule::where('id_formule',$id_formule)->get();
        return $formule;
    }

    public function deleteClasse($id_classe){
        $classe = Classe::find($id_classe);
        $classe->delete();

        return $classe;
    }
    public function deleteFormule($id_formule){
        $formule = Formule::find($id_formule);
        $formule->delete();

        return $formule;
    }
}
