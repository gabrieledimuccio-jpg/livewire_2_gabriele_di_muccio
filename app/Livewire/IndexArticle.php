<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class IndexArticle extends Component
{
    public function render()
    {
        return view('livewire.index-article', [
           'articles' => Article::all(),
        ]);
    }
}
