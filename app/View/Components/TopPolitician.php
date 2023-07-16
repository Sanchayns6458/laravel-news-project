<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TopPolitician extends Component
{
    public $names;
    public $category;
    public $description;
    public $dates;
    public $image;
    public $postTime;
    /**
     * Create a new component instance.
     */
    public function __construct( $name, $category, $description, $dates, $image, $postTime )
    {
        $this->names = $name;
        $this->category = $category;
        $this->description = $description;
        $this->dates = $dates;
        $this->image = $image;
        $this->postTime = $postTime;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.top-politician');
    }
}
