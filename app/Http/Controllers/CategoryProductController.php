<?php

namespace App\Http\Controllers;

use App\Model\CategoryProduct;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = CategoryProduct::latest()->get();
        return view('dashboard.product.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.product.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = request()->validate([
            'image' => 'required|file|image|mimes:jpeg,jpg,png,gif|max:1024',
            'name' => 'required|string|unique:category_products,name',
        ]);

        $validated['image'] = $request->file('image')->store('category-product');

        CategoryProduct::create($validated);

        return redirect()->route('category_product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = CategoryProduct::find($id);
        return view('dashboard.product.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CategoryProduct::find($id);
        return view('dashboard.product.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = CategoryProduct::find($id);

        if ($request->name !== $category->name) {
            $validated = request()->validate([
                'image' => 'file|image|mimes:jpeg,jpg,png,gif|max:1024',
                'name' => 'required|string|unique:category_products,name',
            ]);
        } else {
            $validated = request()->validate([
                'image' => 'file|image|mimes:jpeg,jpg,png,gif|max:1024',
                'name' => 'required|string',
            ]);
        }

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('category-product');
            unlink(public_path('storage/' . $category->image));
        }

        CategoryProduct::where('id', $category->id)->update($validated);
        return redirect()->route('category_product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = CategoryProduct::find($id);
        unlink(public_path('storage/' . $category->image));
        $category->delete();

        return redirect()->route('category_product.index');
    }
}
