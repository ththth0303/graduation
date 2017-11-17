<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attach extends Model
{
    protected $fillable = [
        'title',
        'content',
        'messages',
        'priority',
        'start_date',
        'end_date',
        'user_id',
        'process',
        'status',
    ];
}
