<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormArticle extends Component
{
use WithFileUploads;

#[Validate('required', message:'Il nome è obbligatorio')] 
public $name;

#[Validate('required', message:'Il titolo è obbligatorio')]
public $title;

#[Validate('required', message:'La review è obbligatoria')] 
public $review;

public $img;

#[Validate('required', message:'Il rating è obbligatorio')] 
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
session()->flash('message', 'Evviva!🎉 La tua recensione ha preso il volo ed è ora online.');
}

public function render()
{
return view('livewire.form-article');
}
}
