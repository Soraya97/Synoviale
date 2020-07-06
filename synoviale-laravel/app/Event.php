<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $fillable = ['name'];

    public function edition()
    {
        return $this->hasMany(Edition::class);
    }
}
