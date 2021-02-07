<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SinglePost extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $post;
     public $user;
     public $categories;

    public function __construct($post, $user,$categories)
    {
        $this->post       = $post;
        $this->categories = $categories;
        $this->user       = $user;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.single-post');
    }
}
