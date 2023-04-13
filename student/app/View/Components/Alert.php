<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $title = "";
    public $selected = false;
    /**
     * Create a new component instance.
     */
    public function __construct($message)
    {
        $this->title = $message;
    }

    public function isSelected(string $option): bool
    {
        return $option === $this->selected;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View | Closure | string
    {
        $data = [
            "sigla" => "sig.",
        ];
        return view('components.alert', $data);
    }
}
