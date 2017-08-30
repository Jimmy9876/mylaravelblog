<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Repositories\ArticleRepository;
use App\Article;

class ArticleController extends Controller
{
    protected $article;

    public function __construct(ArticleRepository $article)
    {
        $this->article = $article;
    }

    /**
     * Display the articles resource.
     * 
     * @return mixed
     */
    public function index()
    {
        $articles = $this->article->page(config('blog.article.number'), config('blog.article.sort'), config('blog.article.sortColumn'));

        return view('article.index', compact('articles'));
    }

    public function hotarticle()
    {
        $articles = Article::orderBy('view_count', 'desc')->limit(5)
                            ->get();

        return view('article.hotarticle', compact('articles'));
    }

    /**
     * Display the article resource by article slug.
     * 
     * @param  string $slug
     * @return mixed
     */
    public function show($slug)
    {
        $article = $this->article->getBySlug($slug);

//        $article->content = collect(json_decode($article->content))->get('html');

        return view('article.show', compact('article'));
    }
}
