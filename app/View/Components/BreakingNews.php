<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BreakingNews extends Component
{
    public $dates;
    public $category;
    public $titles;
    public $image;
    /**
     * Create a new component instance.
     */
    public function __construct( $dates, $category, $titles, $image )
    {
        $this->dates = $dates;
        $this->category = $category;
        $this->titles = $titles;
        $this->image = $image;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.breaking-news');
    }
}
