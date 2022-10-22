<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Product;
use App\Model\Role;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'Dashboard';

        $guest = User::where('role_id', 1)->get();
        $editor = User::where('role_id', 2)->get();
        $products = Product::get();
        $articles = Article::get();
        $roles = Role::get();
        return view('dashboard.index', compact('title', 'editor', 'guest', 'products', 'articles', 'roles'));
    }

    public function users()
    {
        $title = 'Users';

        $users = User::get();
        return view('dashboard.users', compact('title', 'users'));
    }

    public function landingpage()
    {
        $title = 'Landing Page';

        return view('dashboard.landingpage', compact('title'));
    }
}
