<?php

namespace App\Http\Controllers;

use App\Formation;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use PDO;

class ConsulterFormation extends Controller
{
    public function getData():UserResource
    {
        $formation = Formation::all();        
        return new UserResource($formation);
    }

    public function confirmer(String $id)
    {
        $User=Auth::user();
        $Formation = Formation::find($id);
        return array(new UserResource($Formation), $User);
    }

    protected function create(Request $data)
    {
        $User=Auth::user();
        $Result = DB::insert('insert into apprenant_formation (idApprenant,idFormation,dateInscris) values (?,?,?)', [ $User->id,$data->id,date_create()]);
        
        // return view('')->with('Inscri', $Inscri);
    }
}
