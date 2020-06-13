<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function package()
    {
      return $this->hasMany(Package::class);
    }
 
}
