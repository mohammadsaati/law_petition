<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    /***************************************************
     ***************** #Relations **********************
     ****************** #Start *************************/
    public function product()
    {
        return $this->belongsTo(Product::class , "content_id");
    }

    public function category()
    {
        return $this->belongsTo(Category::class , "category_id");
    }
    /***************************************************
     ***************** #Relations **********************
     ****************** #End *************************/

}
