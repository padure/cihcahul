<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
     protected $fillable = [
        'denumire', 
        'nr', 
        'content'
    ];
}
