<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function show()
    {
        return Page::all();
    }

    public function update(Request $request, $_id)
   {
        
       $page = Page::find($_id);

       $page->Titre = $request->get('Titre');
       $page->Description = $request->get('Description');
       $page->Rating = $request->get('Rating');
       $page->Sommaire = $request->get('Sommaire');
       $page->Thématique = $request->get('Thématique');
       $page->Média = $request->get('Média');
       $page->save();

       return response()->json(["result" => "ok"], 201);
   }
    

}
