<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thematique;

class ThematiqueController extends Controller
{
    
public function index(){
    $thematiques=Thematique::all();
    return $thematiques;
}

    // public function fetch(Request $request){

    //     $query= Thematique::query();
    //     if($s=$request->input('search')){
    //         $query->where('NomThematique','regexp',"/$s/");
    //     }

    //     return $query->get();
    // }

}
