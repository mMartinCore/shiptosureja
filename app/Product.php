<?php

namespace App\Models;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{

  public function category()
  {
   // return $this->belongsTo(Category::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }

}
