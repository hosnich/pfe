<?php

namespace App\Http\Controllers;

use App\Emploi;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;

class ListEmploi extends Controller
{
    function getData()
    {
        $Emploi= Emploi::all();
        return view('ListEmplois')->with('Emploi', $Emploi);
    }

    public function supprimer($id)
    {
        Emploi::destroy($id);
        
        $fichier=DB::select('select emploi from emplois where id = ?', [$id]);
        
        Storage::delete('storage/app/fichier/emplois/'.var_dump($fichier));
        
        $Emploi= Emploi::all();
        
            return redirect('Emploi')->with('success','Emploi supprimer')->with('Emploi',$Emploi);
    }

    public function GestionEmploi($id)
    {
        $Emploi= Emploi::find($id);
        
        // return view('ModifierEmploi')->with('Emploi',$Emploi);
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
