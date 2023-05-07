<?php

namespace App\View\Components;

use App\Filters\CategoryFilter;
use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class HeaderComponent extends Component
{
    public Collection $header_categories;
    private CategoryFilter $categoryFilter;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->get_header_data();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-component');
    }

    private function get_header_data() : void
    {
        $this->header_categories   = Category::GetHeaderDAta()->get();
    }

}

