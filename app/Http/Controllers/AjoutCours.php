<?php

namespace App\Http\Controllers;

use App\cours;
use App\Http\Resources\UserResource;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class AjoutCours extends Controller
{
    private $file;

    

    protected function create(Request $data):UserResource
    {
        // $this->validate($data, [
        //     'nomCours' => ['required', 'string', 'max:255'],
        //     'descCours' => ['required', 'string', 'max:255'],
        //     'fichier' => ['required', 'file'],
        // ]);
        $filename=$data->file('fichier')->getClientOriginalName();
        $path = $data->file('fichier')->storeAs('\fichier\cours',$filename);
        $Result = DB::insert('insert into cours (nomCours,descCours,fichier) values (?,?,?)', [ $data->nom,$data->desc,$filename]);
        $Cours= cours::all();
        return new UserResource($Cours);
    }

    

}
