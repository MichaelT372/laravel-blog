<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Tag;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    //create a new article controller instance
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        $tags = Tag::lists('name', 'id');

        return view('articles.create', compact('tags'));
    }

    public function store(ArticleRequest  $request)
    {
        $this->createArticle($request);

        return redirect('articles')->with([
            'flash_message' => 'Your article has been created!',
            //'flash_message_important' => true
        ]);
    }

    public function edit(Article $article)
    {
        $tags = Tag::lists('name', 'id');

        return view('articles.edit', compact('article', 'tags'));
    }

    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());

        $this->syncTags($article, $request->input('tag_list'));

        return redirect('articles');
    }

    //sync up list of tags in the database
    private function syncTags(Article $article, array $tags)
    {
        $article->tags()->sync($tags);
    }

    //save an article
    private function createArticle(ArticleRequest $request)
    {
        $article = \Auth::user()->articles()->create($request->all());

        $article->syncTags($article, $request->input('tag_list'));

        return $article;
    }
}
