<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/insert_user', 'Utilisateurs@createPersonne');

Route::get('/utilisateurs', 'Utilisateurs@getUtilisateurs');

Route::get('/utilisateur/{id_personne}', 'Utilisateurs@oneUtilisateur');

Route::post('/up_personne/{id_personne}', 'Utilisateurs@updatePersonne');

Route::post('/up_utilisateur/{id_utilisateur}', 'Utilisateurs@updateUtilisateur');

Route::post('/auth', 'Utilisateurs@authentification');

Route::get('/delete_personne/{id_personne}', 'Utilisateurs@deleteUtilisateur');

//ROUTE ASSURES

Route::get('/get_assures', 'Assures@getAssures');

//CLASSES and formules ROUTE
Route::post('/add_classe', 'ParamIndivAcc@addClasse');
Route::post('/add_formule', 'ParamIndivAcc@addFormule');

Route::get('/delete_classe/{id_classe}', 'ParamIndivAcc@deleteClasse');
Route::get('/delete_formule/{id_formule}', 'ParamIndivAcc@deleteFormule');

Route::get('/get_classe/{id_classe}', 'ParamIndivAcc@getOneClasse');
Route::get('/get_formule/{id_formule}', 'ParamIndivAcc@getOneFormule');

Route::get('/get_classes', 'ParamIndivAcc@getClasses');
Route::get('/get_formules', 'ParamIndivAcc@getFormules');

Route::post('/update_classe/{id_classe}', 'ParamIndivAcc@updateClasse');
Route::post('/update_formule/{id_formule}', 'ParamIndivAcc@updateFomrule');