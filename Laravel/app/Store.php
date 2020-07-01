<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    use SoftDeletes;
    
    protected $fillable = [
        'person_id'
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
