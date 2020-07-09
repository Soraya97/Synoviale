<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{

    protected $fillable = [
        'startTime',
        'endTime',
        'feedback',
        'active',
        'testday_id',
        'edition_id',
        'event_id',
        'product_id',
        'client_id'
    ];



    public function testday()
    {
        return $this->belongsTo(Testday::class);
    }

    public function edition()
    {
        return $this->belongsTo(Edition::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

     public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
