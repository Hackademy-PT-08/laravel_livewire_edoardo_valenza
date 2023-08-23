<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Mostro vista articoli
        return view('articles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Mostro il form di creazione articolo
        return view('articles.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //Mostro il form di modifica articolo
        return view('articles.edit', [

            'idArticolo' => $id

        ]);
    }

}
