<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dot extends Model
{
    public function build()
    {
        return $this->belongsTo(Build::class);
    }
}
