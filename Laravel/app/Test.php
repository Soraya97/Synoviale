<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'number',
        'startTime',
        'endTime',
        'feedback',
        'testDay_id',
        'edition_id',
        'event_id',
        'product_id',
        'client_id'
    ];

    

    public function testday()
    {
        return $this->belongsTo(TestDay::class);
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
