<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $label;
    public $class;

    /**
     * Create a new component instance.
     *
     * @param string $type
     * @param string $label
     * @param string|null $class
     */
    public function __construct($type = 'button', $label = 'Submit', $class = null)
    {
        $this->type = $type;
        $this->label = $label;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.button');
    }
}
