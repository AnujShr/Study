<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    public function scopeThisYear($query)
    {
        return $query->whereBetween('created_at', [Carbon::now()->firstOfYear(), Carbon::now()->lastOfYear()]);
    }

    public function scopeYearBefore($query)
    {
        return $query->whereBetween('created_at', [Carbon::now()->firstOfYear()->subYear(), Carbon::now()->lastOfYear()->subYear()]);
    }
}
