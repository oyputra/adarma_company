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
        $title = 'Article';

        $article = Article::latest()->get();
        return view('dashboard.article.index', compact('article', 'title'));
    }
    public function create()
    {
        $title = 'Add Article';

        $category = CategoryArticle::get();
        $article = Article::get();
        return view('dashboard.article.create', compact('category', 'article', 'title'));
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
        $validated['slug'] = str_replace(' ', '-', strtolower($validated['slug']));
        Article::create($validated);

        return redirect()->route('article.index');
    }
    public function show(Article $article)
    {
        $title = 'Show Article';

        return view('dashboard.article.show', compact('article', 'title'));
    }
    public function edit(Article $article)
    {
        $title = 'Edit Article';

        $articles = Article::get();
        $category = CategoryArticle::get();

        return view('dashboard.article.edit', compact('article', 'articles', 'category', 'title'));
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
        $validated['slug'] = str_replace(' ', '-', strtolower($validated['slug']));
        
        Article::where('id', $article->id)->update($validated);

        return redirect()->route('article.index');
    }
    public function destroy(Article $article)
    {
        $articles = Article::get();

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
