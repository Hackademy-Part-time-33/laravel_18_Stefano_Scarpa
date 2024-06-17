<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $articles = Article::all();
        return view('livewire.articles.index', ['articles' => $articles]);
    }

    public function destroy(Article $article){
        $article->delete();
        session()->flash('delete', 'Article successfully eliminated.');
    }
}
