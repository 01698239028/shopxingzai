<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oder_detail extends Model
{
    //
    protected $table= 'oder_details';

    public function oder(){
        return $this->belongsTo('App\Oder','oder_id','id');
    }

    public function product(){
        return $this->belongsToMany('App\Product','product_id','id');
    }

}
