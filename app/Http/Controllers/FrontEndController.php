<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\CategoryProduct;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrontEndController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }
    public function article()
    {
        $title = 'Articles';
        $article = Article::latest()->first();
        if (isset($article)) {
            $articles = Article::where('id', '!=', $article->id)->latest()->get();
        } else {
            $articles = $article;
        }
        return view('frontend.article.index', compact('article', 'title', 'articles'));
    }
    public function article_show(Article $article)
    {
        $title = 'Article - ' . $article->title;
        $articles_latest = Article::where('id', '!=', $article->id)->latest()->limit(2)->get();
        $article_relate_1 = Article::where('id', $article->relate_article_first)->first();
        $article_relate_2 = Article::where('id', $article->relate_article_second)->first();
        
        return view('frontend.article.show', compact('article', 'articles_latest', 'title', 'article_relate_1', 'article_relate_2'));
    }
    public function product()
    {
        $title = 'Products';
        $category = CategoryProduct::get();
        $products = Product::latest()->get();
        return view('frontend.product.index', compact('title', 'products', 'category'));
    }
    public function product_filter(Request $request)
    {
        $title = 'Products';
        $category = CategoryProduct::get();
        if ($request->has('filter')) {
            $products = Product::where('category_id', $request->filter)->latest()->get();
        } else {
            $products = Product::latest()->get();
        }
        return view('frontend.product.index', compact('title', 'products', 'category'));
    }
}
