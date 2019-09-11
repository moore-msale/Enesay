<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function build()
    {
        return $this->belongsTo(Build::class);
    }
}
