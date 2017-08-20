<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    public function getRouteKeyName()
   {
       return 'code';  // may change into a user name
   }

   public function return()
   {
       if($this->available) {
           return "This bike is not currently checked out";
       }
       $this->available = true;
       $this->save();
       return 'Thank you.  Your bike has been returned.';
   }

   public function checkout()
   {
       if(!$this->available) {
           return "This bike is not currently available";
       }
       $this->available = false;
       $this->save();
       return 'Thank you for using our bikes!';
   }
}
