<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{    
    protected $fillable = [
        'postalCode',
        'name',
        'canton',
        'country_id'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }
}
