<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    public function destinations() {
        return $this->belongsToMany(Destination::class)->withTimestamps();
    }
}
