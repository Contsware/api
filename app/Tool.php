<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    //
    protected $fillable = [
        'name',
        'version'
    ];

    public function project(){
        return $this->belongsTo('App\Project');
    }


}
