<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'icon' ,
        'exp_level' ,
        'technology_name',
    ];
}
