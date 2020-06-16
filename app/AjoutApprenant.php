<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AjoutApprenant extends Model
{
    protected $fillable = [
        'id' ,'nom', 'prenom', 'dateNais', 'cin', 'email', 'password'
    ];
}
