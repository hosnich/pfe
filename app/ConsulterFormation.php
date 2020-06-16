<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsulterFormation extends Model
{
    protected $fillable = [
        'id' ,'nomFormation', 'descriptionFormation', 'dureeFormation', 'prixFormation'
        ];
}
