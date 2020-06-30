<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testday extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'date',
        'startHour',
        'endHour',
        'edition_id',
        'event_id'
    ];

    public function edition()
    {
        return $this->belongsTo(Edition::class);
    }

    public function badge()
    {
        return $this->hasMany(Badge::class);
    }

    public function test()
    {
        return $this->hasMany(Test::class);
    }
}
