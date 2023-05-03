<?php

namespace App\Models;

use App\Filters\CategoryFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function ScopeFilter($query , CategoryFilter $categoryFilter)
    {
        return $categoryFilter->apply($query);
    }

    public static function GetHeaderDAta()
    {
        return self::query()->where("type" , "header_category");
    }
}
