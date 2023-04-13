<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PostBox;

class PostVotes extends Component
{
    public function render()
    {
        return view('livewire.post-votes', [
            'postBoxes' => PostBox::with('postVotes')->get()
        ]);
    }
}
