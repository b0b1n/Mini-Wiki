<?php

namespace App\Http\Controllers;

use App\Models\Thematique;
use Illuminate\Http\Request;

class ThematiqueController extends Controller
{
    public function them(Request $request)
    {
            $them = Thematique::where([
            'NomThematique' => $request->them,
        ])->get();

        return $them;
    }
    public function themall(Request $request)
    {
        return Thematique::all();
    }
    function search($name)
    {

        $thematiques = Thematique::where('NomThematique', 'LIKE', '%' . $name . '%')->get();

        if (count($thematiques)) {
            return  Response()->json($thematiques);
        } else {
            return response()->json(['Result' => 'No Data  found'], 404);
        }
    }
}
