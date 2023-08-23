<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleIndex extends Component
{
    public $search = '';

    public function render()
    {

        if ( $this->search !== '' ) {

            $all_articles = Article::where('title', $this->search)->get();

        } else {

            $all_articles = Article::all();

        }

        return view('livewire.article-index', [

            'articles' => $all_articles

        ]);
    }
}
