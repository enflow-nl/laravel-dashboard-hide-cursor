<?php

namespace Enflow\Dashboard\Tile\HideCursor;

use Livewire\Component;

class HideCursorComponent extends Component
{
    public $position;

    public function mount(string $position)
    {
        $this->position = $position;
    }

    public function render()
    {
        return view('dashboard-hide-cursor::tile', []);
    }
}
