<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Build extends Model
{
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function dots()
    {
        return $this->hasMany(Dot::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
