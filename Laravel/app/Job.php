<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'description',
        'event_id',
        'edition_id',
        'staff_id'
    ];

    public function event()
    {
        return $this->hasMany(Event::class);
    }

    public function edition()
    {
        return $this->hasMany(Edition::class);
    }
    
    public function staff()
    {
        return $this->hasMany(Staff::class);
    }
}
