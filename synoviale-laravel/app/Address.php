<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
     protected $fillable = [
        'street1',
        'street2',
        'streetNumber',
        'POBox',
        'city_id',
        'person_id'
        ];

     public function city()
    {
        return $this->belongsTo(City::class);
    }

     public function person()
    {
        return $this->belongsTo(Person::class);
    }

     public function addressType()
    {
        return $this->belongsTo(Addresstype::class);
    }
}
