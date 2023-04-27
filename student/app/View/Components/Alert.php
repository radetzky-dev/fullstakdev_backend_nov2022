<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $title = "";
    public $opzione = false;
    public $selected = false;
    /**
     * Create a new component instance.
     */
    public function __construct($message, $opzione)
    {
        $this->title = $message;
        $this->opzione = $opzione;
    }

    public function isSelected(string $option): bool
    {
        if ($option == "true") {
            return true;
        } else {
            return false;
        }

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View | Closure | string
    {
        $data = [
            "testo" => "questo testo è stato aggiunto in automatico",
        ];
        return view('components.alert', $data);
    }
}
