<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function author() : BelongsTo
    {
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
}
