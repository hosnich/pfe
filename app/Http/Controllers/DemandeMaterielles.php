<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Auth;

class DemandeMaterielles extends Controller
{   

    protected function create(Request $data)
    {
        
        $idFormateur=Auth::user()->id;
        $Materielle='';
        $DemandeMaterielle = 
        DB::insert('insert into Demande_Materielles (idFormateur,idFormation,materielles) values (?, ?,?)', [$idFormateur,$data->idFormation,$Materielle]);
        return $DemandeMaterielle;
    }

    

    

}
