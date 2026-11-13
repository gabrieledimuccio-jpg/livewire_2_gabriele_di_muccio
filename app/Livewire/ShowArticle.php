<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ShowArticle extends Component
{

public function destroy(Article $article){
$article->delete();
return redirect()->route('index')->with('message', 'Recensione eliminata');
}

public $article;

    public function render()
    {
        return view('livewire.show-article')->with('success', 'Articolo eliminato con successo!');
    }
}
