<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleInput extends Component
{
    public Article $article;

    public function mount() {
        $this->article = new Article();
    }

    protected $rules = [
        'article.name' => 'required|string|min:1'
    ];


    public function save(): void {
        $this->validate();
        $this->article->save();
        $this->article = new Article();
    }

    public function render()
    {
        return view('livewire.article-input');
    }
}
