<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
        'user_id',
        'post_title',
        'post_slug',
        'photo',
        'post_tags',
        'post_description',
    ];
}
