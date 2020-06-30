<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'since',
        'until',
        'person_id',
        'company_id'
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
