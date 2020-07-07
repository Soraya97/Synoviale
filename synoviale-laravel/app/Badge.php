<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{    
    protected $fillable = [
        'number',
        'client_id',
        'person_id',
        'testday_id',
        'edition_id',
        'event_id'
    ];

    public function testday()
    {
        return $this->belongsTo(TestDay::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
