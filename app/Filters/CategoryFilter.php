<?php

 namespace App\Filters;

 use App\Filters\Filter;

 class CategoryFilter extends Filter
{
     public function type(string $type)
     {
        return $this->builder->where("type"  , "=" , $type);
     }
 }
