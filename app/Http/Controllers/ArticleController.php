<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\CategoryArticle;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $article = Article::latest()->get();
        return view('dashboard.article.index', compact('article'));
    }
    public function create()
    {
        $category = CategoryArticle::get();
        $article = Article::get();
        return view('dashboard.article.create', compact('category', 'article'));
    }
    public function store(Request $request)
    {
        $validated = request()->validate([
            'image' => 'required|file|image|mimes:jpeg,jpg,png,gif|max:1024',
            'title' => 'required|string',
            'category_id' => 'required|integer',
            'slug' => 'required|string',
            'editor' => 'required|integer',
            'writer' => 'required|string',
            'relate_article_first' => 'integer',
            'relate_article_second' => 'integer',
            'body' => 'required|string',
        ]);
        
        $validated['image'] = $request->file('image')->store('article');

        Article::create($validated);

        return redirect()->route('article.index');
    }
    public function show($id)
    {
        $article = Article::find($id);

        return view('dashboard.article.show', compact('article'));
    }
    public function edit($id)
    {
        $article = Article::find($id);
        $articles = Article::get();
        $category = CategoryArticle::get();

        return view('dashboard.article.edit', compact('article', 'articles', 'category'));
    }
    public function update(Request $request, $id)
    {
        $article = Article::find($id);

        $validated = request()->validate([
            'image' => 'file|image|mimes:jpeg,jpg,png,gif|max:1024',
            'title' => 'required|string',
            'category_id' => 'required|integer',
            'slug' => 'required|string',
            'editor' => 'required|integer',
            'writer' => 'required|string',
            'relate_article_first' => 'integer',
            'relate_article_second' => 'integer',
            'body' => 'required|string',
        ]);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('article');
            unlink(public_path('storage/' . $article->image));
        }

        Article::where('id', $article->id)->update($validated);

        return redirect()->route('article.index');
    }
    public function destroy($id)
    {
        $articles = Article::get();
        $article = Article::find($id);

        foreach ($articles as $row) {
            $row->where('relate_article_first', $article->id)->update([
                'relate_article_first' => null,
            ]);

            $row->where('relate_article_second', $article->id)->update([
                'relate_article_second' => null,
            ]);
        }
        
        unlink(public_path('storage/' . $article->image));
        $article->delete();

        return redirect()->route('article.index');
    }
}
