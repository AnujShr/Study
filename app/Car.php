<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = [];

    public function carmodel()
    {
        return $this->belongsTo(CarModel::class);
    }
}
