<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Foods()
    {
    return $this->hasMany('App\Models\Food');
    }
}
