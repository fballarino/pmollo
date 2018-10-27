<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Destination extends Model
{
    use SoftDeletes;

    public function customers() {
        return $this->belongsToMany(Customer::class)->withTimestamps();
    }
}
