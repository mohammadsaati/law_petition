<?php

 namespace App\Services;

 use App\Models\Product;
 use App\Services\Service;

 class ProductService extends Service
{

 	public function model()
	{
        $this->model = Product::class;
	}

 }
