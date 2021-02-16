<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Categories extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $posts;
    public $currentCategory;


    public function __construct($posts,$currentCategory)
    {
        $this->currentCategory  = $currentCategory;
        $this->posts             = $posts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.categories');
    }
}
