<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PostBox;

class PostVotes extends Component
{
    public $sumVotes, $post;

    public function mount($post) {
        $this->post = $post;
        $this->sumVotes = $post->votes->sum('vote');
    }

    public function render()
    {
        return view('livewire.post-votes');
    }

    public function vote($vote) {
        if(!in_array($vote, [-1, 1]) 
            || $this->post->votes->where('user_id', auth()->id())->count()) {
            return;
        }

        $this->post->votes()->create([
            'user_id' => auth()->id(),
            'vote' => $vote
        ]);

        $this->sumVotes += $vote;
    }
}
