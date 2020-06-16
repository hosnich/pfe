<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use DB;
use App\User;

class ListApprenant extends Controller
{

    public function show($id)
    {
        // $user = user::find($id);
        // return view('showProfile')->with('$user',$user);
    }

    function getData():UserResource
    {
        $User = User::all()->where('role','Apprenant');
        return new UserResource($User);
    }


    public function GestionProfile($id)
    {
        return view('profile')->with('user',User::find($id));
    }

    public function modifier(Request $request)
    {
        
        // $user = User::find($request->$id);
        // $this->validate($request,[
        //     'nom' => 'required',
        //     'prenom' => 'required',
        //     'DateNais' => 'required',
        //     'cin' => 'required',
        //     'email' => 'required|email',
        //     'password' => '',
        // ]);
      
        // $user->nom = $request->nom;
        // $user->prenom = $request->prenom;
        // $user->DateNais = $request->DateNais;
        // $user->cin = $request->cin;
        // $user->email = $request->email;
    

        // if ($request ->has('password'))
        //     {
        //         $user->password = $request->Hash::make($user['password']);
        //     }
        
        // $user->save();

    }


    

    public function supprimer($id)
    {
        $user=User::find($id);
        $user->delete();
            return redirect('ListApprenant')->with('success','Apprenant supprimer');
    }
}
