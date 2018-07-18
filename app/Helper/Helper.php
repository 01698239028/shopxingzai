<?php
namespace App\Helper;
use App\Category;
class Helper
{
    public static function category(){
        $category= Category::all();
        return $category;
    }

}