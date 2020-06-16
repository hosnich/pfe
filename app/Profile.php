<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'dateNais', 'cin', 'email', 'password'
    ];
}
