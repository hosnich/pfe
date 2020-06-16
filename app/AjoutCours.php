<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AjoutCours extends Model
{
    protected $fillable = [
        'id' ,'nomCours', 'descCours','fichier'
        ];
}
