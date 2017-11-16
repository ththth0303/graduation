<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function attachs()
    {
        return $this->morphMany(Attach::class, 'attachtable');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function assignee()
    {
        return $this->hasMany(UserTask::class, 'task_id');
    }

}
