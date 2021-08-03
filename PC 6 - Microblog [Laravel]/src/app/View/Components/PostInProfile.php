<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostInProfile extends Component
{
    public $postInProfile;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($postInProfile)
    {
        $this->postInProfile = $postInProfile;
       
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post-in-profile');
    }
}
