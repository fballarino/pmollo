<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function producer(){
        return $this->belongsTo('App\Producer');
    }

    public static function displayByCategory(Category $category){
        return Vehicle::where('category_id', $category->id)->paginate(20);
    }
}
