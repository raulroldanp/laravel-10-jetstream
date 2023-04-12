<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ExamplesList extends Component
{
    public $links, $title;

    public function render()
    {
        return view('livewire.examples-list');
    }
}
