<?php

 namespace App\Services;

 use App\Filters\CategoryFilter;
 use App\Models\Category;
 use App\Models\Option;
 use App\Models\Product;
 use App\Services\Service;

 class HomeService extends Service
{

    private array $data = [];
 	public function model()
	{

	}

     public function homeData(CategoryFilter $categoryFilter) : array
     {
         $this->data["main_image"]              = Option::Get_main_image();
         $this->data["new_products"]            = Product::Get_new_product();
         // To filter icon category
         request()->merge([
             "type"  =>  "icon_category"
         ]);
         $this->data["icon_categories"]         = Category::query()->Filter($categoryFilter)->get();


         return $this->data;
     }
 }



