<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'shortDescr',
        'longDescr',
        'compagny_id'
    ];

    public function company()
    {
        return $this->belongsTo(company::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function edition()
    {
        return $this->hasMany(Edition::class);
    }
}
