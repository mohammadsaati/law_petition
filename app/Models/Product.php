<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /***************************************************
     ***************** #Relations **********************
     ****************** #Start *************************/
    public function content()
    {
        return $this->belongsTo(Content::class , "content_id");
    }

    public function banners()
    {
        return $this->hasMany(Banner::class , "product_id");
    }
    /***************************************************
     ***************** #Relations **********************
     ****************** #End *************************/

    public static function Get_new_product()
    {
        return self::query()->take(6)->get();
    }

}
