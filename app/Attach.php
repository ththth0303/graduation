<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attach extends Model
{
    protected $table = 'attachs';

    protected $fillable = [
        'attachtable_id',
        'attachtable_type',
        'name',
        'path',
        'user_id',
    ];

    public function attachable()
    {
        return $this->morphTo();
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
}
