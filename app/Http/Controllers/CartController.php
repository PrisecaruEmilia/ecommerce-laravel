<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::firstOrFail();
        $mightLike = Product::MightLike()->get();
        return view('cart')->with([
            'mightLike'=> $mightLike,
            'product' => $product
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = Cart::search(
            function($cartItem, $rowId) use ($request) {
                return $cartItem->id === $request->id;
            }
        );

        if($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success_message', 'Item is already in your cart!');
        }

        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');

        return redirect()->route('cart.index')->with('success_message', 'Item was added to your cart!');
    }

    public function empty() {
        Cart::instance('saveForLater')->destroy();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,4'
        ]);

        if($validator->fails()) {
            session()->flash('errors', collect(['Quantity must be between 1 and 4!']));
            return response()->json(['success' => false], 400);
        }

        if($request->quantity > $request->productQuantity) {
            session()->flash('errors', collect(['We currently do not have enough items in stock!']));
            return response()->json(['success' => false], 400);
        }
        // Cart::update($id, $request->quantity);

        $cart = Cart::content()->where('rowId', $id);
        if($cart->isNotEmpty()){
         Cart::update($id, $request->quantity);
        }

        // being an AJAX request we can't just return redirect a route
        // we have to return a JSON response
        session()->flash('success_message','Quantity was updated!');
        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     function destroy($id)
    {
        // Cart::remove($id);\
        $cart = Cart::content()->where('rowId', $id);
       if($cart->isNotEmpty()){
        Cart::remove($id);
        }

        return back()->with('success_message', 'Item has been removed!');
    }

    /**
     * Switch item for shopping cart to save for later
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function saveForLater($id)
    {
        $item = Cart::get($id);
        Cart::remove($id);

        $duplicates = Cart::instance('saveForLater')->search(
            function($cartItem, $rowId) use ($item) {
                return $cartItem->id === $item->id;
            }
        );

        if($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success_message', 'Item is already saved for later!');
        }

        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)->associate('App\Product');

        return redirect()->route('cart.index')->with('success_message', 'Item has been saved for later!');
    }
}
