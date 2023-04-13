<?php

namespace App\Http\Controllers;

use App\Models\PostBox;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostVotesController extends Controller
{
    public function index(): View {
        return view('post-votes.index', [
            'posts' => PostBox::with('votes')->take(5)->get()
        ]);
    }
}
