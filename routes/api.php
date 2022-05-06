<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UtilisateurController;
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
Route::get("user/{email}",[UtilisateurController::class,'user']);
Route::put("rewatch/{email}",[UtilisateurController::class,'correct']);
Route::get('searchpg/{page}', 'PageController@search');
Route::get('searchth/{Thematique}', 'ThematiqueController@search');
Route::get('searchut/{username}', 'UtilisateurController@search');
