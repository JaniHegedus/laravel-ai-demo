<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AlertBox extends Component
{
    public $error;
    public $insight;
    public $bgColor;
    public $borderColor;
    public $textColor;
    public $title;
    public $defaultMessage;

    /**
     * Create a new component instance.
     *
     * @param string|null $error
     * @param string|null $insight
     */
    public function __construct($error = null, $insight = null)
    {
        $this->error = $error;
        $this->insight = $insight;

        // Determine styles based on whether it's an error or insight message
        if ($error) {
            $this->bgColor = 'bg-red-100 dark:bg-red-200';
            $this->borderColor = 'border-red-300 dark:border-red-400';
            $this->textColor = 'text-red-800 dark:text-red-900';
            $this->title = 'Error:';
            $this->defaultMessage = 'An error has occurred.';
        } else {
            $this->bgColor = 'bg-green-100 dark:bg-green-200';
            $this->borderColor = 'border-green-300 dark:border-green-400';
            $this->textColor = 'text-green-800 dark:text-green-900';
            $this->title = 'AI Insight:';
            $this->defaultMessage = 'Your code analysis will appear here.';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.alert-box');
    }
}
