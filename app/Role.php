<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='roles';
    public function team(){
        return $this->hasMany('App\Team');
    }
}
