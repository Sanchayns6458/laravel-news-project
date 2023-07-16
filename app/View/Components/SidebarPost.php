<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarPost extends Component
{
    public $dates;
    public $category;
    public $titles;
    public $image;
    public $classes;
    /**
     * Create a new component instance.
     */
    public function __construct( $dates, $category, $titles, $image, $classes )
    {
        $this->dates = $dates;
        $this->category = $category;
        $this->titles = $titles;
        $this->image = $image;
        $this->classes = $classes;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar-post');
    }
}
