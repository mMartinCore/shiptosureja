<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
   function  price_cal($price){
            if ($this->weight<1) {
                if ($price!=null) {
                    return 300-$price ;
                } else {
                    return 300;
                }
            } else {
                if ($price!=null) {
                   $val= ($this->weight *250)+300;
                   return   $val-$price ;
                } else {
                    return   ($this->weight *250)+300;
                }

            }

   }
}
