<?php

namespace App\Http\Controllers;

use App\cours;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;

class listCours extends Controller
{
    function getData()
    {
        $Cours= cours::all();
        return view('ListCours')->with('Cours', $Cours);
    }

    public function supprimer($id)
    {
        DB::delete('delete from Cours where id = ?', [$id]);
        
        $fichier=DB::select('select fichier from Cours where id = ?', [$id]);
        
        Storage::delete('storage/app/fichier/cours/'.var_dump($fichier));
        

            return redirect('Cours')->with('success','Cours supprimer');
    }

    public function GestionCours($id)
    {
        $Cours= DB::select('select * from cours where id = ?', [$id]);
        
        return view('ModifierCours')->with('Cours',$Cours);
    }

    public function update(Request $request)
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
       
        // $user->save();

    }
}
