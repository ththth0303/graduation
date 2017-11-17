<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'degree',
        'department',
        'birthday',
        'gender',
        'level',
        'password',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'user_id');
    }
    public function attachs()
    {
        return $this->hasMany(Attach::class, 'user_id');
    }
    public function documents()
    {
        return $this->hasMany(Document::class, 'user_id');
    }
    public function assignees()
    {
        return $this->hasMany(UserTask::class, 'user_id');
    }
    public function finalProjects()
    {
        return $this->hasMany(FinalYearProject::class, 'user_id');
    }
    public function activities()
    {
        return $this->hasMany(Activities::class, 'user_id');
    }
}
