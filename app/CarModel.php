<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class   CarModel extends Model
{
    protected $guarded = [];

    public function car()
    {
        return $this->hasMany(Car::class);
    }
}
