<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Tag;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $tags = Tag::all();
        return view('livewire.navigation', compact('tags'));
    }
}
