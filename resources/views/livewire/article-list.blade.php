<fieldset>
    <div class="mt-4 space-y-3">
            @foreach($articles as $article)
                @livewire('article-list-item', ['article' => $article], key($article->id))
            @endforeach
    </div>
</fieldset>
