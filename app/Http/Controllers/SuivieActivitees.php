<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class SuivieActivitees extends Controller
{
    function getData()
    {
        $idApprenant=Auth::user()->id;
        $Resultat= DB::select('select * from resultats_tests where idApprenant=? ',[$idApprenant]);
        return $Resultat;

        // $Resultat= DB::select('select * from apprenant_formation where idApprenant=? ',[$idApprenant]);
        // return $Resultat;
        // $nomFormation= DB::select('select nomFormation from formations where id=? ',[$idFormation]);
        // $nomTest= DB::select('select nomTest from tests where idApprenant=? ',[$idApprenant]);
        // return ([$Resultat,$nomFormation,$nomTest]);
    }
}
