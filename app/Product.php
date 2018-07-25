<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table= 'products';

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function image(){
        return $this->hasMany(Image::class);
    }

    public function post(){
        return $this->hasMany('App\Post','product_id','id');
    }

    public function comment(){
        return $this->hasMany('App\Comment','product_id','id');
    }

    public function oder_detail(){
        return $this->belongsToMany('App\Oder_detail','product_id','id');
    }
}
