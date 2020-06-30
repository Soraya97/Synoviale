<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'postaleCode',
        'name',
        'canton',
        'contry_id'
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
