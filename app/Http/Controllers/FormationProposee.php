<?php

namespace App\Http\Controllers;

use App\formationProposees;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class FormationProposee extends Controller
{
    function getData():UserResource
    {
        $FormationProposse = formationProposees::all();
        return new UserResource($FormationProposse);
        return $FormationProposse;
    }

    public function create(Request $request)
    {
        $FormationProposse = formationProposees::create([
            'sujetProposition' => $request->sujet,
            'contenuProposition' => $request->contenu,
        ]);
    }
}
