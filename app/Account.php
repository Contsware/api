<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{

  public function activity(){
      return $this->belongsTo('App\Activity');
  }
}
