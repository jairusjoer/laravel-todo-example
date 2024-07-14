<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Icon extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $variant
    ) {
        $this->variant = file_get_contents(resource_path("icons/{$this->variant}.svg"));
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.icon');
    }
}
