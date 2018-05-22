<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    protected $fillable = ['title', 'body'];
//    protected $guarded =[];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
