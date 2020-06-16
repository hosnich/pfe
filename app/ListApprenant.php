<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListApprenant extends Model
{
    protected $fillable = [
        'id' ,'nom', 'prenom', 'dateNais', 'cin', 'email', 'password'
    ];

   
}
