<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ArticleListItem extends Component
{
    public $article;

    protected $rules = [
        'article.done' => 'required|boolean'
    ];

    public function save()
    {
        $this->validate();

        if (!empty($this->article)) {
            $this->article->save();
        }
    }

    public function remove(){
        $this->emit('articleDeleted', $this->article->id);
    }

    public function render()
    {
        return view('livewire.article-list-item');
    }
}
