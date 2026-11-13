<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditArticle extends Component
{
use WithFileUploads;

#[Validate('required', message:'Il nome è obbligatorio')] 
public $name;

#[Validate('required', message:'Il titolo è obbligatorio')]
public $title;

#[Validate('required', message:'La review è obbligatoria')] 
public $review;

#[Validate('nullable|image|max:2048')]
public $img;

public $oldImg;

#[Validate('required', message:'Il rating è obbligatorio')] 
public $rating = 0;

public $article;

public function mount()
{
$this->name   = $this->article->name;
$this->title  = $this->article->title;
$this->review = $this->article->review;
$this->oldImg = $this->article->img;
$this->rating = $this->article->rating;
}

public function updateArticle(){
$this->validate();

if ($this->img) {
if ($this->oldImg) {
Storage::disk('public')->delete($this->oldImg);
}
$path = $this->img->store('articles', 'public');
} else {
$path = $this->oldImg;
}

$this->article->update([
'name' => $this->name,
'title' => $this->title,
'review' => $this->review,
'img' => $path,
'rating' => $this->rating,
]);

$this->oldImg = $path;
$this->reset('img');


session()->flash('message', 'Articolo aggiornato correttamente');
}


public function render()
{
return view('livewire.edit-article');
}
}
