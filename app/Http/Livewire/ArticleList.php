<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleList extends Component
{

    protected $listeners = ['articleDeleted', 'refreshComponent' => '$refresh'];

    // list of articles
    public $articles;

    public function mount() {
        $this->articles = Article::all()->sortByDesc('created_at');
    }

    public function articleDeleted($id) {
        $this->articles->find($id)->delete();
        $this->emit('refreshComponent');
    }

    public function render()
    {
        return view('livewire.article-list');
    }
}
