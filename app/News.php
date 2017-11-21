<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'content',
        'attach',
        'user_id',
        'attach_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
