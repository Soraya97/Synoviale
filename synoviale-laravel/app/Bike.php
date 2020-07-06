<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    protected $fillable = [
        'type',
        'framSize',
        'frameUnit',
        'rimSize',
        'rimUnit',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
