<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'name',
        'methodology'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function tools(){
        return $this->hasMany('App\Tool');
    }
}
