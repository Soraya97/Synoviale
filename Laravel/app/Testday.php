<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testday extends Model {


    protected $fillable = [
        'date',
        'startHour',
        'endHour',
        'event_id',
        'edition_id',
    ];

    public function event() {
        return $this->belongsTo(Event::class);
    }

    public function edition() {
        return $this->belongsTo(Edition::class);
    }

    public function badge() {
        return $this->hasMany(Badge::class);
    }

    public function test() {
        return $this->hasMany(Test::class);
    }

}
