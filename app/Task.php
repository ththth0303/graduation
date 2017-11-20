<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
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

    public function taskUpdates()
    {
        return $this->hasMany(TaskUpdate::class, 'task_id');
    }
}
