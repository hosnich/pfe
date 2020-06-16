<?php

namespace App\Http\Controllers;

use App\Formation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\ListFormation;
use App\Providers\RouteServiceProvider;
use App\User;
use CreateFormationsTable;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class AjoutFormation extends Controller
{
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => ['required', 'string', 'max:255'],
            'descFormation' => ['required', 'string', 'max:255'],
            'dureeFormation' => ['required', 'string', 'max:255'],
            'prixFormation' => ['required', 'string', 'max:255'],
        ]);
    }

    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $data):UserResource
    {
        // $Result = Formation::create([
        //     'nomFormation' => $data->nom,
        //     'descriptionFormation' => $data->desc,
        //     'duree' => $data->duree,
        //     'prix' => $data->prix,
        // ]);
        
        DB::insert('insert into formations (nomFormation,descriptionFormation,dureeFormation,prixFormation) values (?,?,?,?)', [ $data->nom,$data->desc,$data->duree,$data->prix]);
        $Formation = Formation::all();        
        return new UserResource($Formation);
    }
}
