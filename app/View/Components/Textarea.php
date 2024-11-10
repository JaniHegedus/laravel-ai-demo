<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $name;
    public $id;
    public $rows;
    public $class;
    public $placeholder;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string|null $id
     * @param int $rows
     * @param string|null $class
     * @param string|null $placeholder
     */
    public function __construct($name, $id = null, $rows = 10, $class = null, $placeholder = 'Paste your code here...')
    {
        $this->name = $name;
        $this->id = $id ?? $name; // If no ID is provided, use the name as the ID
        $this->rows = $rows;
        $this->class = $class;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.textarea');
    }
}
