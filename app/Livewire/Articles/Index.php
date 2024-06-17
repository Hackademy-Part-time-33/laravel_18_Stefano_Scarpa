<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{

    public $search = '';

    public function render()
    {
        if ($this->search) {
            $articles = Article::where('title', 'LIKE', '%'. $this->search . '%')->orWhere('subtitle', 'LIKE', '%'. $this->search . '%')->get();
        } else {
            $articles = Article::all();
        }
        return view('livewire.articles.index', ['articles' => $articles]);
    }

    public function destroy(Article $article){
        $article->delete();
        session()->flash('delete', 'Article successfully eliminated.');
    }
}
