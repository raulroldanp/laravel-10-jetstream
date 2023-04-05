<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class Posts extends Component
{
    public $title, $slug;

    protected $rules = [
        'title' => 'required|max:100',
        'slug' => 'required|max:100'
    ];

    public function render()
    {
        $posts = Post::all();
        return view('livewire.posts', compact('posts'));
    }

    public function storePost() {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'slug' => $this->slug
        ]);

        $this->reset();
    }

    public function updatedTitle() {
        $this->slug = SlugService::createSlug(Post::class, 'slug', $this->title);
    }
}
