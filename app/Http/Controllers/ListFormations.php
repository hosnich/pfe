<?php

namespace App\Http\Controllers;

use App\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Formations;
use App\Http\Resources\UserResource;

class ListFormations extends Controller
{
    public function getData():UserResource
    {
        $formation = Formation::all();        
        return new UserResource($formation);
    }

    public function supprimer($id)
    {
        Formation::destroy($id);

    }

    public function GestionFormation($id):UserResource
    {
        $formation= Formation::find($id);
        
        return new UserResource($formation);
    }

    public function update(Request $request):UserResource
    {
         $formation = Formation::find($request->$id);
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
    
        // $user->save();
        return new UserResource($formation);

    }

}
