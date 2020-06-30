<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'number',
        'shortDescr',
        'longDescr',
        'distinctiveSign',
        'lienWeb',
        'brand_id'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function test()
    {
        return $this->hasMany(Test::class);
    }

    public function bike()
    {
        return $this->belongsTo(Bike::class);
    }
}
