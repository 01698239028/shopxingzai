<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    //
    protected $table= 'oders';

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function oder_detail(){
        return $this->hasMany('App\Oder_detail','oder_id','id');
    }
}
