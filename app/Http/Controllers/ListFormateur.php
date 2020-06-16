<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use DB;
use App\User;

class ListFormateur extends Controller
{
    function getData():UserResource
    {
        $User = User::all()->where('role','Formateur');
        return new UserResource($User);
    }

    public function supprimer($id)
    {
        $user=User::find($id);
        $user->delete();
            return redirect('ListFormateur')->with('success','Formateur supprimer');
    }


    public function GestionProfile($id)
    {
        return view('profile')->with('user',User::find($id));
    }

    

}

