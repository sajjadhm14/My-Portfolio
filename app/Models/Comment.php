<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'user_name',
        'user_email',
        'comment',
        'status',
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(BlogPost::class , 'post_id' ,'id');
    }
}
