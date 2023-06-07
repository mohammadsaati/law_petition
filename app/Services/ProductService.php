<?php

 namespace App\Services;

 use App\Models\Content;
 use App\Models\Product;
 use App\Services\Service;

 class ProductService extends Service
{

 	public function model()
	{
        $this->model = Product::class;
	}

     public function get_single_product(Product $product) : array
     {
        $data = [];
        $data["product"] = $product;

        $data["related_products"] = $this->get_related_products($product);

        $data["related_contents"] = $this->get_related_content($product);

        return $data;
     }

     private function get_related_products(Product $product): \Illuminate\Database\Eloquent\Collection|array
     {
         return Product::query()->whereHas("content" , function ($query) use ($product){
             $query->where("category_id" , $product->content->category_id);
         })->whereNot("id" , $product->id)->get();
     }

     private function get_related_content(Product $product): \Illuminate\Database\Eloquent\Collection|array
     {
         return Content::query()->where([
             ["category_id" , "=" , $product->content->category_id] ,
             ["type" , "=" , "post"]
         ])->get();
     }
 }
