<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    public function getRouteKeyName()
   {
       return 'code';  // may change into a user name
   }
}
