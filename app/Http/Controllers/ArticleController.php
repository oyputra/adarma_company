<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\CategoryArticle;
use App\Model\LandingPage;
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
        $landingpage = LandingPage::latest()->first();

        return view('dashboard.article.index', compact('landingpage', 'article', 'title'));
    }
    public function create()
    {
        $title = 'Add Article';

        $category = CategoryArticle::get();
        $article = Article::get();
        $landingpage = LandingPage::latest()->first();

        return view('dashboard.article.create', compact('landingpage', 'category', 'article', 'title'));
    }
    public function store(Request $request)
    {
        $validated = request()->validate([
            'image' => 'required|file|image|mimes:jpeg,jpg,png,gif|max:1024',
            'title' => 'required|string',
            'category_id' => 'required|integer',
            'slug' => 'required|string|unique:articles,slug',
            'editor' => 'required|integer',
            'writer' => 'required|string',
            'relate_article_first' => 'integer',
            'relate_article_second' => 'integer',
            'body' => 'required|string',
        ]);
        
        $validated['image'] = $request->file('image')->store('article');
        $validated['slug'] = str_replace(' ', '-', strtolower($validated['slug']));
        $validated['slug'] = preg_replace("/[^a-zA-Z0-9-]/", "", $validated['slug']);

        Article::create($validated);

        return redirect()->route('article.index');
    }
    public function show(Article $article)
    {
        $title = 'Show Article';

        $landingpage = LandingPage::latest()->first();

        return view('dashboard.article.show', compact('landingpage', 'article', 'title'));
    }
    public function edit(Article $article)
    {
        $title = 'Edit Article';

        $articles = Article::get();
        $category = CategoryArticle::get();
        $landingpage = LandingPage::latest()->first();

        return view('dashboard.article.edit', compact('landingpage', 'article', 'articles', 'category', 'title'));
    }
    public function update(Request $request, $id)
    {
        $article = Article::find($id);

        if ($request->slug !== $article->slug) {
            $validated = request()->validate([
                'image' => 'file|image|mimes:jpeg,jpg,png,gif|max:1024',
                'title' => 'required|string',
                'category_id' => 'required|integer',
                'slug' => 'required|string|unique:articles,slug',
                'editor' => 'required|integer',
                'writer' => 'required|string',
                'relate_article_first' => 'integer',
                'relate_article_second' => 'integer',
                'body' => 'required|string',
            ]);
        } else {
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
        }


        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('article');
            unlink(public_path('storage/' . $article->image));
        }
        $validated['slug'] = str_replace(' ', '-', strtolower($validated['slug']));
        $validated['slug'] = preg_replace("/[^a-zA-Z0-9-]/", "", $validated['slug']);
        
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
