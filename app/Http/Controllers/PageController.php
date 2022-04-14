<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function show($Titre)
   {
       return view('page', [
           'page' => Page::where('Titre', '=', $Titre)->first()
       ]);
   }

   public function store(Request $request)
   {
       
       $page = new Page();

       $page->Titre = $request->get('Titre');
       $page->Description = $request->get('Description');
       $page->Rating = $request->get('Rating');

       $page->save();
       
       return response()->json(["result" => "ok"], 201);
   }

   public function update(Request $request, $_id)
   {
        
       $page = Page::find($_id);
    
       $page->Titre = $request->get('Titre');
       $page->Description = $request->get('Description');
       $page->Rating = $request->get('Rating');

       $page->save();

       return response()->json(["result" => "ok"], 201);

     /*  
   
    $page = new Page();

    $page->Titre = $request->get('Titre');
    $page->Description = $request->get('Description');
    $page->Rating = $request->get('Rating');

    $page->save();
    
    return response()->json(["result" => "ok"], 201);
    */

   }

}
 