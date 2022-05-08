<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ThematiqueController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\RapportController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('pages', PageController::class)->only([
    'show','update','store'
]);

Route::get("login/{email}/{password}",[UtilisateurController::class,'login']);
Route::put("session/{email}",[UtilisateurController::class,'session']);
Route::get("users",[UtilisateurController::class,'indexall']);
Route::post("register",[UtilisateurController::class,'register']);
Route::post("add",[ThematiqueController::class,'add']);
Route::post("rapp",[RapportController::class,'rapp']);
Route::get("all",[RapportController::class,'repall']);
Route::get("rapp/{Utilisateur}/{Page}",[RapportController::class,'rappt']);
Route::get("user/{email}",[UtilisateurController::class,'user']);
Route::get("them/{them}",[ThematiqueController::class,'them']);
Route::get("suzie/{them}",[ThematiqueController::class,'Suzie']);
Route::get("them",[ThematiqueController::class,'themall']);
Route::put("rewatch/{email}",[UtilisateurController::class,'correct']);
Route::get('searchpg/{page}', 'PageController@search');
Route::get('articles/{createur}','PageController@getarticle');
Route::get('searchth/{Thematique}', 'ThematiqueController@search');
Route::get('searchut/{username}', 'UtilisateurController@search');
Route::get("them",[ThematiqueController::class,'themall']);
Route::get("them/{them}",[ThematiqueController::class,'them']);
Route::get('getuser', 'UtilisateurController@getuser');
