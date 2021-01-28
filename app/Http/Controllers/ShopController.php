<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pagination = 9;
        $categories = Category::all();

        if(request()->category) {
            $products = Product::with('categories')->whereHas('categories', function($query) {
                    $query->where('slug', request()->category);

            });
            $categoryName = optional($categories->where('slug', request()->category)->first())->name;

        } else {
            // paginate only works on the query builder NOT collections
            // $products = Product::inRandomOrder()->take(9)->paginate(6);
            $products = Product::where('featured', true);

            //$categories = Category::all();
            //or
            // $categories = Category::distinct()->get();
            $categoryName = 'Featured';
        }

        if(request()->sort == 'low_high') {
            $products = $products->orderBy('price')->paginate($pagination);
        } elseif(request()->sort == 'high_low') {
            $products = $products->orderBy('price', 'desc')->paginate($pagination);
        } else {
            $products = $products->paginate($pagination);
        }

        return view('shop')->with([
            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $mightLike = Product::where('slug', '!=', $slug)->MightLike()->get();

        $inStock = getStock($product->quantity);

        return view('product')->with([
            'product' => $product,
            'mightLike' => $mightLike,
            'inStock' => $inStock
            ]);
    }

    public function search(Request $request)
    {
        $pagination = 9;

        $request->validate([
            'query' => 'required|min:3',
        ]);
        $query = $request->input('query');
        // $products = Product::where('name', 'like', "%$query%")
        //                     ->orWhere('details', 'like', "%$query%")
        //                     ->orWhere('description', 'like', "%$query%")
        //                     ->paginate($pagination);


        $products = Product::search($query)->paginate($pagination);

        return view('search-results')->with('products', $products);
    }

}
