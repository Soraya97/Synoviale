<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{    
    protected $fillable = [
        'name',
        'shortDescr',
        'longDescr',
        'company_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
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
