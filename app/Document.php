<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function attachs()
    {
        return $this->morphMany(Attach::class, 'attachtable');
    }
}
