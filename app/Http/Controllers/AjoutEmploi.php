<?php

namespace App\Http\Controllers;

use App\Emploi;
use App\Http\Resources\UserResource;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Emplois;

class AjoutEmploi extends Controller
{
    private $file;

    

    protected function create(Request $data):UserResource
    {
        // $this->validate($data, [
        //     'nomCours' => ['required', 'string', 'max:255'],
        //     'descCours' => ['required', 'string', 'max:255'],
        //     'fichier' => ['required', 'file'],
        // ]);
        $filename=$data->file('emploi')->getClientOriginalName();
        $path = $data->file('emploi')->storeAs('\fichier\emplois',$filename);
        $Result = DB::insert('insert into emplois (idFormation,classe,emploi) values (?,?,?)', [ $data->idFormation,$data->classe,$filename]);
        $Emploi= Emploi::all();
        return new UserResource($Emploi);
    }

    

}
