<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function builds()
    {
        return $this->hasMany(Build::class);
    }
}
