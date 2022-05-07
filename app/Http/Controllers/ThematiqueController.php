<?php

namespace App\Http\Controllers;

use App\Models\Thematique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ThematiqueController extends Controller
{

    public function add(Request $request)
    {
          //$input = $request->all();
     $validator =
     Validator::make($request->all(),
 [   
     
     'NomThematique'=>'required|max:255',
     
     'Color'=>'required|max:255',
     
 ]
 );

 //auth()->attempt($request->only('email','password'));
 
 //return redirect()->route('dashbord');
 
 if($validator->fails()){

 return response()->json($validator->errors());
     }else{
         $them = Thematique::where(
             'NomThematique',$request->NomThematique
         )->first();
         //dd($users);
         
         //dd($users[0]->email);
          if(empty($them)){
            Thematique::create([
          
                 'NomThematique' =>$request->NomThematique,
                 'SousThematique'=>[],
                 //'SousThematique' =>$request->SousThematique,
                 'Color' =>$request->Color
                 
                 //Hash::make()
                ]);
                //$Thematique = Thematique::where('NomThematique', '=', $request->NomThematique)
                //->push('SousThematique',$request->SousThematique,true);
                
         }else{
            
           $Thematique = Thematique::where('NomThematique', '=', $request->NomThematique)
           ->push('SousThematique',$request->SousThematique,true);
     }
     }
    
    }

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
