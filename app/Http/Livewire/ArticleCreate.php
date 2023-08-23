<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreate extends Component
{
    public $title, $content, $message, $color;

    public function render()
    {
        return view('livewire.article-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //Salvo il record nel database
        $validated = $this->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $article = new Article;

        $article->title = $this->title;
        $article->content = $this->content;

        $article->save();

        $this->title = '';
        $this->content = '';
        $this->message = 'Articolo aggiunto con successo';
        $this->color = 'green';
    }
}
