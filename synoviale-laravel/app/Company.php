<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    
    protected $fillable = [
        'name'
    ];

    public function brand()
    {
        return $this->hasMany(Brand::class);
    }

    public function addresstype()
    {
        return $this->hasMany(AddressType::class);
    }

    public function contact()
    {
        return $this->hasMany(Contact::class);
    }
}
