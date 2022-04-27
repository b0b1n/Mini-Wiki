<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;

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

Route::get("logout",[UserController::class,'logout']);//put it like button with post request
Route::get("dashbord",[UserController::class,'dashbord']);
Route::get("login/{email}/{password}",[UserController::class,'login']);
Route::put("session/{email}",[UserController::class,'session']);
Route::get("users",[UserController::class,'indexall']);
Route::post("register",[UserController::class,'register']);
Route::get("user/{email}",[UserController::class,'user']);
Route::put("rewatch/{email}",[UserController::class,'correct']);
//Route::post('/user/register', [UserController::class, 'register']);
