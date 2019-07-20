<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function contact(){
        return $this->belongsTo('App\Contact');
    }
    public function activities(){
        return $this->hasMany('App\Account');
    }

}
