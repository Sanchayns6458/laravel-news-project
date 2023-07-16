<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturNews extends Component
{
    public $dates;
    public $category;
    public $titles;
    public $image;
    public $location;
    public $postTime;


    /**
     * Create a new component instance.
     */
    public function __construct( $category, $titles, $dates, $location, $postTime, $image )
    {
        $this->category = $category;
        $this->titles = $titles;
        $this->dates = $dates;
        $this->location = $location;
        $this->postTime = $postTime;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.featur-news');
    }
}
