<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'number',
        'place',
        'startDate',
        'endDate',
        'event_id'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function job()
    {
        return $this->hasMany(Job::class);
    }

    public function testday()
    {
        return $this->hasMany(TestDay::class);
    }

    public function brand()
    {
        return $this->hasMany(Brand::class);
    }
}
