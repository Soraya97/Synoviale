<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addresstype extends Model {

    use SoftDeletes;

    protected $fillable = [
        'description',
        'company_id',
        'address_id',
    ];

    public function company() {
        return $this->hasMany(Company::class);
    }

    public function address() {
        return $this->hasMany(Address::class);
    }

}
