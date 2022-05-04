<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
class PageController extends Controller
{
    public function index(){
        $pages = Page::all();

        return $pages;
        
    }
    public function fetch(Request $request){
        
        $query= Page::query();
        if($s=$request->input('search')){
            $query->where('title','regexp',"/$s/")
            ->orWhere('Description','regexp',"/$s/")
            ->orWhere('Contenu','regexp',"/$s/")
            ->orWhere('thematique_id','regexp',"/$s/");
        }

        return $query->get();
    }
}
