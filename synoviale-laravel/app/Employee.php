<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    
    protected $fillable = [
        'person_id'
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

}
