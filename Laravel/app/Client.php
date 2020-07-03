<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{    
    protected $fillable = [
        'homeCanton',
        'person_id'
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
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
