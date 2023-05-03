<?php

namespace App\Http\Controllers;

use App\Filters\CategoryFilter;
use App\Services\HomeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private HomeService $service;

    public function __construct()
    {
        $this->service = new HomeService();
    }

    public function index(CategoryFilter $categoryFilter)
    {
        $data =  $this->service->homeData($categoryFilter);

        return view("layouts.layout" , compact("data"));
    }
}
