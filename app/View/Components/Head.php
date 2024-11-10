<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Head extends Component
{
    public string $title;
    public string $styles;
    public string $scripts;

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param string|null $styles
     * @param string|null $scripts
     */
    public function __construct(string $title = 'Laravel Application', string $styles = '', string $scripts = '')
    {
        $this->title = $title;
        $this->styles = $styles;
        $this->scripts = $scripts;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.head');
    }
}
