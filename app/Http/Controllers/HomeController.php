<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function accueil(){
//        $articles= DB::collection('Pages')->get();
        $articles= Page::all();
        
        return view('btata', ['articles'=> $articles]);
        //return $articles;
    }
}
