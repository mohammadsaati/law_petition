<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }


    public function show(Product $product)
    {
        $data["title"] = $product->content->title;

        $data = array_merge($this->service->get_single_product($product) ,$data);


        return view("products.show" , compact("data"));
    }
}
