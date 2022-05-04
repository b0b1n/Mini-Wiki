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
        $page->Contenu = $request->get('Contenu');
        $page->Thematique = $request->get('Thematique');
        $page->Media = $request->get('Media');
        $page->save();

        return response()->json(["result" => "ok"], 201);
    }

    public function store(Request $request)
    {
        request()->validate([
            'Titre' => 'required',
            'Description' => 'required',
            'Rating' => 'required',
            'Contenu' => 'required',
            'Thematique' => 'required',
            'Media' => 'required',
            'Createur' => 'required'
        ]);
        $page = new Page();
        $page->Titre = $request->get('Titre');
        $page->Description = $request->get('Description');
        $page->Rating = $request->get('Rating');
        $page->Contenu = $request->get('Contenu');
        $page->Thematique = $request->get('Thematique');
        $page->Media = $request->get('Media');
        $page->Createur = $request->get('Createur');
        $page->save();

        return $page;
    }
}
