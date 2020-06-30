<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'code'
    ];

    public function city()
    {
        return $this->hasMany(City::class);
    }
}
