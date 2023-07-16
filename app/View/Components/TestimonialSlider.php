<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TestimonialSlider extends Component
{
    /**
     * Create variable for dynamic component content
     */
    public $title, $date, $postedBy;
    /**
     * Create a new component instance.
     */
    public function __construct( $title, $date, $postedBy )
    {
        $this->title = $title;
        $this->date = $date;
        $this->postedBy = $postedBy;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.testimonial-slider');
    }
}
