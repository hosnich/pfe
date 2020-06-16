<?php

use App\Http\Controllers\AjoutTest;
use App\Http\Controllers\ConsulterFormation;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\User;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/ApprenantSupprimer{id}', 'ListApprenant@supprimer');

Route::get('/FormateurSupprimer{id}', 'ListFormateur@supprimer');

Route::get('/FormationSupprimer{id}', 'ListFormations@supprimer');

Route::get('/GestionProfile{id}', 'ListApprenant@GestionProfile');

Route::get('/GestionProfile{id}', 'ListFormateur@GestionProfile');

Route::post('/AjoutApprenant' ,'AjoutApprenant@create');

Route::post('/AjoutFormateur' ,'AjoutFormateur@create');

Route::get('/ApprenantDashboard', function () {
    return view('ApprenantDashboard');
});

Route::get('/FormateurDashboard', function () {
    return view('FormateurDashboard');
});

Route::get('/AdminDashboard', function () {
    return view('AdminDashboard');
});


Route::get('/Profile', [
    'uses' => 'ProfileController@index',
    'as' => 'Profile'
]);

Route::post('/UpdateProfile' ,'ProfileController@Update');


Route::get('/ListApprenant' ,'ListApprenant@getData');

//Route::get('/ListApprenant/{{id}}' ,'ListApprenant@show');

Route::get('/AjoutApprenant', function () {
    return view('AjoutApprenant');
});

Route::get('/ListFormateur' ,'ListFormateur@getData');

Route::get('/AjoutFormateur', function () {
     return view('AjoutFormateur');
 });

Route::get('/Formation' ,'ListFormations@getData');


Route::get('/AjoutFormation', function () {
    return view('AjoutFormation');
});

Route::post('/AjoutFormation' ,'AjoutFormation@create');

Route::get('/ConsulterFormation' ,'ConsulterFormation@getData');

Route::get('/ConfirmerInscription{id}', 'ConsulterFormation@confirmer');

Route::get('/Inscription{id}', 'ConsulterFormation@create');

Route::get('/AjoutCours', function () {
    return view('AjoutCours');
});

Route::post('/AjoutNvCours' ,'AjoutCours@create');

Route::get('/GestionFormation{id}', 'ListFormations@GestionFormation');

Route::get('/updateFormation', 'ListFormations@update');

Route::get('/Cours' ,'ListCours@getData');

Route::get('/CoursSupprimer{id}', 'ListCours@supprimer');

Route::get('/GestionCours{id}', 'ListCours@GestionCours');

Route::get('/updateCours', 'ListCours@update');

Route::get('/AjoutEmploi', function () {
    return view('AjoutEmploi');
});

Route::post('/AjoutNvEmploi' ,'AjoutEmploi@create');

Route::get('/Emploi' ,'ListEmploi@getData');

Route::get('/EmploiSupprimer{id}', 'ListEmploi@supprimer');

Route::get('/GestionEmploi{id}', 'ListEmploi@GestionEmploi');

Route::get('/updateEmploi', 'ListEmploi@update');

Route::get('/AjoutTestInfo', function() {
    return view('AjoutTestInfo');
});

Route::get('TestNombreQuestion/{nombreQuestion}', function($nombreQuestion) {
    return view('AjoutTest')->with('nombreQuestion',$nombreQuestion);
});

Route::get('/AjoutTest', function() {
    return view('AjoutTest');
});

Route::get('/CreerTest' ,'AjoutTest@AjoutTest');

Route::post('/AjoutQuestion' ,'AjoutTest@AjoutQuestion');

Route::get('/PasserTest{id}', 'AjoutTest@getTest');

Route::get('/SuivieActivitees' ,'SuivieActivitees@getData');

Route::get('/ProposerFormation' ,'FormationProposee@create');

Route::get('/Reclamer' ,'Reclamation@create');

Route::get('/ListAvis' ,'avisFormation@index');

Route::get('/AvisSupprimer' ,'avisFormation@destroy');

Route::get('/AvisCreate' ,'avisFormation@create');

