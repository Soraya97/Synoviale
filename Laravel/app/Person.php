<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'firstName',
        'phoneNumber1',
        'phoneNumber2',
        'email1',
        'email2',
        'comment',
        'address_id'
    ];

    
    public function address()
    {
        return $this->belongsTo(Adress::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}
