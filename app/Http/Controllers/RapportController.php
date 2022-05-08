<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rapport;
use Illuminate\Support\Facades\Validator;

class RapportController extends Controller
{
    public function rapp(Request $request)
    {
          //$input = $request->all();
     $validator =
     Validator::make($request->all(),
 [   
     
     'Utilisateur'=>'required|max:255',
     'Page'=>'required|max:255',
     'Contenu'=>'required|max:255',
     
 ]
 );

 //auth()->attempt($request->only('email','password'));
 
 //return redirect()->route('dashbord');
 
 if($validator->fails()){

 return response()->json($validator->errors());
     }else{
         /*$rapp = Rapport::where('Utilisateur',$request->Utilisateur)
         ->where('Page',$request->Page)
         ->get();
         //dd($users);
         
         //dd($users[0]->email);
          if(empty($rapp)){*/
            Rapport::create([
          
                 'Utilisateur' =>$request->Utilisateur,
                 'Page'=>$request->Page,
                 'Contenu' =>$request->Contenu
                 
                 
                ]);
                
         }
     }
     public function rappt(Request $request)
    {
        $rapp = Rapport::where('Utilisateur',$request->Utilisateur)
         ->where('Page',$request->Page)
         ->get();

        return $rapp;
    }
    public function repall(Request $request)
    {
        return Rapport::all();
    }
    
    }

