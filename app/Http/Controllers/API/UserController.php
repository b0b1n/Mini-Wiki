<?php
namespace App\Http\Controllers\API;
//use App\Message;
use App\Http\Controllers\API\BaseController as Controller;
use Illuminate\Http\Request;


use App\Models\Utilisateur;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use PharIo\Manifest\Email;

class UserController extends BaseController
{
    //////////////////////////GET////////////////////
    public function indexall()
    {
        //$projets = User::all();
        //var_dump($projets);
       return Utilisateur::all();
    }
    /////////////////////////////////////////////
    public function hesAfterUpdate($id)
 {
     $Customer = Utilisateur::find($id);
    return response()->json($Customer->toArray());
 }
    ////////////////////////////////////////////////////
    public function index()
 {
   return ["name"=>"amine"];
 }
 //////////////////////////////////////////REGISTER/////////////////////////////////
 public function register(Request $request)
    {
        //$input = $request->all();
        $validator =
        Validator::make($request->all(),
    [   
        
        'username'=>'required|max:10',
        'password'=>'required',
        'email'=>'required|email|max:255',
        
    ]
    );
   
    //auth()->attempt($request->only('email','password'));
    
    //return redirect()->route('dashbord');
    
    if($validator->fails()){

    return response()->json($validator->errors());
        }else{
            $users = Utilisateur::where(
                'email',$request->email
            )->first();
            //dd($users);
            
            //dd($users[0]->email);
             if(empty($users)){
                Utilisateur::create([
             
                    'username' =>$request->username,
                    'email' =>$request->email,
                    'password' =>$request->password,
                    'estAdmin'=>$request->estAdmin
                    //Hash::make()
                ]);
            }else{
                dd("7eddak temma");
        }
        }
       
    
    }

    /////////////////////////////LOGIN//////////////////////////
    public function login(Request $request){
        $validator =
        Validator::make($request->all(),
    [      
        'email'=>'email',
        'password'=>'',
        
    ]);

    //dd($validator);
    if($validator->fails()){
        return response()->json($validator->errors());
     }else{
    $users = Utilisateur::where('email', '=', $request->email)
    ->where('password', '=', $request->password)
    ->get();
    //dd($users);
    
    if(empty($users[0])){
        return null;

    }else{   
       
        return Utilisateur::where([
            'email' =>$request->email,
            'password' =>$request->password,       
            ])->get();
       
      
        }  
            
    }
}
public function session(Request $request){
    $users = Utilisateur::where('email', '=', $request->email)
    ->get();

    $user = Utilisateur::where('email', '=', $request->email)
    ->update(['Date'=>$request->Date,'EstConnecté'=> $request->EstConnecté]);
    
    ////////////////////////Test for user ////////////////////////
  
    }
    public function user(Request $request){
        
        $user= Utilisateur::where([
            'email' =>$request->email,       
            ])->get();
           
            return $user;
        }
    public function correct(Request $request){
        $user = Utilisateur::where('email', '=', $request->email)
    ->update(['password'=>$request->password]);

    
    }
    
}