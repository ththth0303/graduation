<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SelectOption extends Model
{
    protected $fillable = [
        'display_name',
        'name',
        'value',
        'type',
        'description',
        'order',
    ];

    public function getByType($value)
    {
        return SelectOption::where('type', $value)->get();
    }
}
