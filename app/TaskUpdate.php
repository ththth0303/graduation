<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskUpdate extends Model
{
    //
    protected $fillable = [
        'user_id',
        'message',
        'new_process',
        'old_process',
        'task_id',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }
}
