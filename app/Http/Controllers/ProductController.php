<?php

namespace App\Http\Controllers;

use App\Model\CategoryProduct;
use App\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::get();
        return view('dashboard.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryProduct::get();
        return view('dashboard.product.create', compact('category'));
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
            'name' => 'required|string',
            'category_id' => 'required|integer',
            'price' => 'required|numeric',
            'unit' => 'required|string',
            'status' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|file|image|mimes:jpeg,jpg,png,gif|max:1024',
        ]);

        $validated['image'] = $request->file('image')->store('product');

        Product::create($validated);

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('dashboard.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CategoryProduct::get();
        $product = Product::find($id);

        return view('dashboard.product.edit', compact('category', 'product'));
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
        $product = Product::find($id);

        $validated = request()->validate([
            'name' => 'required|string',
            'category_id' => 'required|integer',
            'price' => 'required|numeric',
            'unit' => 'required|string',
            'status' => 'required|string',
            'description' => 'required|string',
            'image' => 'file|image|mimes:jpeg,jpg,png,gif|max:1024',
        ]);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('product');
            unlink(public_path('storage/' . $product->image));
        }

        Product::where('id', $product->id)->update($validated);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        unlink(public_path('storage/' . $product->image));
        $product->delete();

        return redirect()->route('product.index');
    }
}
