<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $fillable = [
        'description',
        'event_id',
        'edition_id',
        'employee_id',
    ];

    public function event()
    {
        return $this->hasMany(Event::class);
    }

    public function edition()
    {
        return $this->hasMany(Edition::class);
    }

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
