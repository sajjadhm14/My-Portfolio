<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = [
        'name',
        'profession' ,
        'short_description',
        'photo',
        'resume',
        'instagram_url',
        'telegram_url',
        'github_url',
        'linkedin_url',
        'YOE',
        'PC',
        'HC',
    ] ;
}
