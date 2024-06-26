<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{

    #[Validate('required')]
    public $title;
    #[Validate('required')]
    public $subtitle;
    #[Validate('required')]
    public $content;


    public function store(){
        $this->validate(); 
        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'content' => $this->content,
        ]);

        session()->flash('status', 'Article successfully created.');
 
        return $this->redirect('/articles');
        
    }

    public function render()
    {
        return view('livewire.articles.create');
    }
}
