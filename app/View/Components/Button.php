<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    //1 Property/variable
    public $title='';



    //2.Constructor
    /**
     * Create a new component instance.
     */
    public function __construct($title)
    {
        $this->title= $title;
    }


    //3. Method
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}