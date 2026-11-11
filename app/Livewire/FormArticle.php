<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormArticle extends Component
{
use WithFileUploads;

public $name;
public $title;
public $review;
public $img;
public $rating = 0;

public function store(){

 $path = $this->img ? $this->img->store('articles', 'public') : null;

Article::create([
    'name'   => $this->name,
    'title'   => $this->title,
    'review' => $this->review,
    'img'    => $path,
    'rating' => $this->rating,
]);

 $this->reset();
 session()->flash('message', '<svg xmlns="http://w3.org" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 3.5-2 3.5s2.24-.5 3.5-2c1.34-1.16 2.56-2.5 3.5-4l-5-5c-1.5.94-2.84 2.16-4 3.5z"></path><path d="M12 9l9.39-9.39a1 1 0 0 1 1.42 0 1 1 0 0 1 0 1.42L13.41 10.5"></path><path d="m9 15 5.5 5.5L22 12 12 2z"></path></svg> <strong>Evviva! 🎉</strong> La tua recensione ha preso il volo ed è ora online.');
}

public function render()
{
return view('livewire.form-article');
}
}
