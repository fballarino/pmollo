<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function vehicles(){
        return $this->hasMany('App\Vehicle');
    }
}
