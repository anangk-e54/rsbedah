<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('article/index', compact('articles')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->input();
        $article = new Article;
        $article->tittle = $request->tittle;
        $article->author = $request->author;
        $article->editor = $request->doctorphone;
        $article->resource = $request->resource;
        $article->headline = $request->headline;
        $article->headline_img = $request->headline_img;
        $article->firstparagraph = $request->firstparagraph;
        $article->firstparagraph_img = $request->firstparagraph_img;
        $article->secondparagraph = $request->secondparagraph;
        $article->secondparagraph_img = $request->secondparagraph_img;
        $article->thirdparagraph = $request->thirdparagraph;
        $article->thirdparagraph_img = $request->thirdparagraph_img;
        $article->fourthparagraph = $request->fourthparagraph;
        $article->fourthparagraph_img = $request->fourthparagraph_img;
        $article->footline = $request->footline;

        if($request->hasFile('headline_img')){
            $request->file('headline_img')->move('assets/images/team/',$request->file('headline_img')->getClientOriginalName());
            $article->headline_img = $request->file('headline_img')->getClientOriginalName();
            $article->save();
        }
        
        $article->save();

        return redirect()->route('articlelist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}