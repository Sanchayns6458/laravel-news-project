<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewsAuthor extends Component
{
    public $image, $name, $desc, $facebook, $twitter, $pinterest;
    /**
     * Create a new component instance.
     */
    public function __construct( $image, $name, $desc, $facebook, $twitter, $pinterest )
    {
        $this->image = $image;
        $this->name = $name;
        $this->desc = $desc;
        $this->facebook = $facebook;
        $this->twitter = $image;
        $this->pinterest = $pinterest;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news-author');
    }
}
