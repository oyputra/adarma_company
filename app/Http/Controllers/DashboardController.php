<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\LandingPage;
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
        $landingpage = LandingPage::latest()->first();

        return view('dashboard.index', compact('title', 'editor', 'guest', 'products', 'articles', 'roles', 'landingpage'));
    }

    public function users()
    {
        $title = 'Users';

        $users = User::get();
        $landingpage = LandingPage::latest()->first();

        return view('dashboard.users', compact('title', 'users', 'landingpage'));
    }

    public function landingpage()
    {
        $title = 'Landing Page';

        $landingpage = LandingPage::latest()->first();

        return view('dashboard.landingpage', compact('title', 'landingpage'));
    }

    public function landingpage_store(Request $request)
    {
        $landingpage = LandingPage::latest()->first();
        
        $validated = request()->validate([
            'img_logo' => 'nullable|file|image|mimes:jpeg,jpg,png,gif|max:1024',
            'img_landing' => 'nullable|file|image|mimes:jpeg,jpg,png,gif|max:1024',
            'text_landing_large' => 'nullable|string',
            'text_landing_small' => 'nullable|string',
        ]);

        if ($landingpage == null) {
            if ($request->file('img_logo')) {
                $validated['img_logo'] = $request->file('img_logo')->store('landingpage');
            }
            if ($request->file('img_landing')) {
                $validated['img_landing'] = $request->file('img_landing')->store('landingpage');
            }
            
            LandingPage::create($validated);
        } else {
            if ($request->file('img_logo')) {
                $validated['img_logo'] = $request->file('img_logo')->store('landingpage');
                if ($landingpage->img_logo != null) {
                    unlink(public_path('storage/' . $landingpage->img_logo));
                }
            }
            if ($request->file('img_landing')) {
                $validated['img_landing'] = $request->file('img_landing')->store('landingpage');
                if ($landingpage->img_landing != null) {
                    unlink(public_path('storage/' . $landingpage->img_landing));
                }
            }
            
            LandingPage::latest()->update($validated);
        }
        
        return redirect()->back();
    }

    public function landingpage_destroy()
    {
        $landingpage = LandingPage::latest()->first();
        if ($landingpage->img_logo != null) {
            unlink(public_path('storage/' . $landingpage->img_logo));
        }
        if ($landingpage->img_landing != null) {
            unlink(public_path('storage/' . $landingpage->img_landing));
        }
        
        $landingpage->delete();

        return redirect()->back();
    }
}
