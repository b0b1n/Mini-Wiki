<?php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Page;
    use App\Models\Thematique;
    use App\Models\Utilisateur;
    use Psy\Command\WhereamiCommand;

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

       public function search($name)
        {
            $pages = Page::where('Titre', 'LIKE', '%'. $name. '%')
            ->orWhere('Contenu', 'like', '%'. $name. '%')
            ->orWhere('Description', 'like', '%'. $name. '%')
            ->orWhere('Thematique','like', '%'. $name. '%')
            ->orWhere('Createur','like', '%'. $name. '%')
            ->get();

            if(count($pages)){
            return Response()->json($pages);
            }
            else
            {
            return response()->json(['Result' => 'No Data  found'], 404);
            }


        }

           public function getarticle($id){
                if (Utilisateur::where('_id', $id)->exists()) {
                    $page = Page::where('Createur', $id)->get()->toJson(JSON_PRETTY_PRINT);
                    return response($page, 200);
                } else {
                    return response()->json([
                    "message" => "Articles not found"
                    ], 404);
                }
            }

        }

