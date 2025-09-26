<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'service_id',
        'description',
    ];

    public function service():BelongsTo
    {
        return $this->belongsTo(Service::class , 'service_id' , 'id');
    }
}
