<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PostBox;

class PostVotes extends Component
{
    public $sumVotes, $post;

    public function mount($post) {
        $this->$post = $post;
    }

    public function render()
    {
        return view('livewire.post-votes');
    }
}
