<?php

namespace App\Livewire\Articles;

use Livewire\Component;

class Create extends Component
{

    public $title;
    public $subtitle;
    public $content;


    public function store(){
        $this->all();
    }

    public function render()
    {
        return view('livewire.articles.create');
    }
}
