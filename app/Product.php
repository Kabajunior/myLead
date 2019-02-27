<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    protected $dates = ['created_at', 'updated_at'];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }
}
