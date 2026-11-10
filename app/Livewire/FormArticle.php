<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormArticle extends Component
{
use WithFileUploads;

public $name;
public $review;
public $img;
public $rating = 0;

public function store(){

Article::create([
    'name'   => $this->name,
    'review' => $this->review,
    'img'    => $this->img,
    'rating' => $this->rating,
]);

 session()->flash('message', 'Recensione creata con successo');
}

public function render()
{
return view('livewire.form-article');
}
}
