<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ThematiqueController;
use Illuminate\Support\Facades\Route;

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



Route::get('/pages',[PageController::class,'index']);
Route::get('/search',[PageController::class,'fetch']);

// Route::get('/search',[ThematiqueController::class,'fetch']);

