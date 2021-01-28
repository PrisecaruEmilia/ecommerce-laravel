<?php

namespace App\Http\Controllers;

use App\Order;
use Exception;
use App\Product;
use App\Checkout;
use App\OrderProduct;
use Illuminate\Http\Request;
use App\Http\Requests\CheckoutRequest;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tax = config('cart.tax')/100;
        // $discount = session()->get('coupon.discount') ?? 0;
        // $newSubtotal = (Cart::subtotal() - $discount);
        // $newTax = $newSubtotal * $tax;
        // $newTotal = $newSubtotal + $newTax;

        if(auth()->user() && request()->is('guestCheckout')) {
            return redirect()->route('checkout.index');
        }

        return view('checkout')->with([
            'discount' => $this->getPriceDetails()->get('discount'),
            'newSubtotal' => $this->getPriceDetails()->get('newSubtotal'),
            'newTax' => $this->getPriceDetails()->get('newTax'),
            'newTotal' => $this->getPriceDetails()->get('newTotal'),
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
        // Check race condition when there are less items available to purchase

        if($this->productsAreNoLongerAvailable()) {
            // return back()->withErrors('Sorry! One of the items in your cart is no longer available.');
            return redirect()->route('checkout.index')->with('error_message', 'Sorry! One of the items in your cart is no longer available.');
        }

        $contents = Cart::content()->map(function($item) {
            return $item->model->slug.', '.$item->qty;
        })->values()->toJson();


        try {
            $charge = Stripe::charges()->create([
                // 'amount' => Cart::total(),
                'amount' => $this->getPriceDetails()->get('newTotal'),
                'currency' => 'RON',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                    //this is the overall qty of the order
                    'quantity' => Cart::instance('default')->count(),
                    'discount' => collect(session()->get('coupon'))->toJson(),
                ],
            ]);


            $this->addToOrdersTable($request, null);


            // decrease the quantities of all products in the table
            $this->decreaseQuantities();
            // SUCCESSFUL
            Cart::instance('default')->destroy();
            session()->forget('coupon');

            return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
            // return back()->with('success_message', 'Thank you! Your payment has been successfully accepted!');
        } catch (CardErrorException $e) {

            $this->addToOrdersTable($request, $e->getMessage());
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }

    protected function addToOrdersTable($request, $error)
    {
                    // Insert into orders table

                    $order = Order::create([
                        'user_id' => auth()->user() ? auth()->user()->id : null,
                        'billing_email' => $request->email,
                        'billing_name' => $request->name,
                        'billing_address' => $request->address,
                        'billing_city' => $request->city,
                        'billing_province' => $request->province,
                        'billing_postalcode' => $request->postalCode,
                        'billing_phone' => $request->phone,
                        'billing_name_on_card' => $request->cardName,
                        'billing_discount' => $this->getPriceDetails()->get('discount'),
                        'billing_discount_code' => $this->getPriceDetails()->get('code'),
                        'billing_subtotal' => $this->getPriceDetails()->get('newSubtotal'),
                        'billing_tax' => $this->getPriceDetails()->get('newTax'),
                        'billing_total' => $this->getPriceDetails()->get('newTotal'),
                        'error' => $error,

                    ]);

                    // Insert into order_product table

                    foreach(Cart::content() as $item) {
                        OrderProduct::create([
                            'order_id' => $order->id,
                            'product_id' => $item->model->id,
                            'quantity' => $item->qty,
                        ]);
                    }

    }

    protected function decreaseQuantities()
    {
        foreach(Cart::content() as $item) {
            $product = Product::find($item->model->id);

            $product->update(['quantity' => $product->quantity - $item->qty]);
        }
    }

    // it's not working
    protected function productsAreNoLongerAvailable()
    {
        foreach(Cart::content() as $item) {
            $product = Product::find($item->model->id);

            if($product->quantity < $item->qty) {
                return true;
            }
        }

        return false;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function getPriceDetails() {
        $tax = config('cart.tax')/100;
        $code = session()->get('coupon.name') ?? null;
        $discount = session()->get('coupon.discount') ?? 0;
        $newSubtotal = (Cart::subtotal() - $discount);
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal + $newTax;

        return collect([
            'tax' => $tax,
            'code' => $code,
            'discount' => $discount,
            'newSubtotal' => $newSubtotal,
            'newTax' => $newTax,
            'newTotal' => $newTotal,
        ]);
    }
}
