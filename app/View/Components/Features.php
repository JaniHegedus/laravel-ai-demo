<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Features extends Component
{
    public $features;
    public $maxDisplayed;

    /**
     * Create a new component instance.
     *
     * @param array $features
     * @param int $maxDisplayed
     */
    public function __construct($features = [], $maxDisplayed = 3)
    {
        $this->features = $features;
        $this->maxDisplayed = $maxDisplayed;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.features');
    }
}
