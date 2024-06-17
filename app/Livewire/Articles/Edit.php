<?php

namespace App\Livewire\Articles;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    #[Validate('required')]
    public $title;
    #[Validate('required')]
    public $subtitle;
    #[Validate('required')]
    public $content;

    public $article;


    public function mount(){
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->content = $this->article->content;
    }

    public function update(){

        $this->validate(); 
        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'content' => $this->content,
        ]);

        session()->flash('status', 'Article successfully updated.');
 
        return $this->redirect('/articles');
    }

    public function render()
    {
        return view('livewire.articles.edit');
    }
}
