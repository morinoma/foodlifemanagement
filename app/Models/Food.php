<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
     protected $fillable = ['user_id', 'food_category', 'food_name', 'where_to_eat',
       'eating_time'];

    public function Category()
    {
      return $this->belongsTo('App\Models\Category');
    }


}
