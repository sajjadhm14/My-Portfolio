<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'title',
        'resume_cat',
        'institution',
        'from_year',
        'to_year',
    ];
}
