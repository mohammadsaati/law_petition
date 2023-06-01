<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $data["product"] = $product;
        $data["title"] = $product->content->title;

        return view("products.show" , compact("data"));
    }
}
