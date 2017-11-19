<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
    protected $fillable = [
        'user_id',
        'task_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
}
