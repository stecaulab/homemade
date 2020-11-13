<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AllPost extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $posts;
     public $categories;

    public function __construct($posts, $categories)
    {
        $this->posts = $posts;
        $this->categories = $categories;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.all-post');
    }
}
