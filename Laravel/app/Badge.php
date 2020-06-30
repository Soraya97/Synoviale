<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'number',
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
