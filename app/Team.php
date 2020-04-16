<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table ='teams';
    public function role(){
        return $this->belongsTo('App\Role');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
