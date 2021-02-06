<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Search extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $categories;

    //public $currentCategory;

    public $posts;

    public function __construct($posts,$categories)
    {
        $this->posts = $posts;
        $this->categories = $categories;
        //$this->currentCategory= $currentCategory;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.search');
    }
}
