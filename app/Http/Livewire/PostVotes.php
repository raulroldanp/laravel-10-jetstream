<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PostBox;

class PostVotes extends Component
{
    public function render()
    {
        return view('livewire.post-votes', [
            'posts' => PostBox::with('votes')->get()
        ]);
    }
}
