<?php

namespace App\Http\Controllers;

use App\Formation;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use DB;
use App\User;

class FormationsController extends Controller
{
    function getData():UserResource
    {
        $Formation = Formation::all();
        return new UserResource($Formation);
    }

    public function supprimer($id)
    {
        Formation::destroy($id);
            // return redirect('GestionFormation')->with('success','Formation supprimer');
    }

}
