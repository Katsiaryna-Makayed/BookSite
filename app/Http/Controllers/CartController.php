<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Cart;
use App\Products;


class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //update/ add new item to cart
    if (Request::isMethod('post')) {
        $product_id = Request::get('product_id');
        $product = Products::find($product_id);
        Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price));
    }

    //increment the quantity
   /* if (Request::get('product_id') && (Request::get('increment')) == 1) {
        $rowId = Cart::search(array('id' => Request::get('product_id')));
        $item = Cart::get($rowId[0]);

        Cart::update($rowId[0], $item->qty + 1);
    }*/
if (Request::get('product_id') && (Request::get('increment')) == 1) {
$item = Cart::search(function($key, $value) { return $key->id == Request::get('product_id'); })->first();
Cart::update($item->rowId, $item->qty + 1);
}
    //decrease the quantity
    if (Request::get('product_id') && (Request::get('decrease')) == 1) {
        $item = Cart::search(function($key, $value) { return $key->id == Request::  get('product_id'); })->first();
        Cart::update($item->rowId, $item->qty - 1);
    }
/*if (Request::get('product_id') && (Request::get('decrease')) == 1) {
        $rowId = Cart::search(array('id' => Request::get('product_id')));
        $item = Cart::get($rowId[0]);

        Cart::update($rowId[0], $item->qty - 1);
    }
*/
    $cart = Cart::content();

    return view('cart', array('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));

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
//        Cart::associate('Products','App')->add($request->id, $request->name, 1, $request->price);
Cart::update();
        Cart::add($request->id, $request->name, 1, $request->price);
            $str = 'Item was added to your cart!';
        return redirect('cart')->with('str', $str);  
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
    public function removeItem($id)
    {
        Cart::remove($id);
       return redirect('/cart');

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
//$item = Cart::search(function($key, $value) { return $key->id == Request::  get('product_id'); })->first();
      //  Cart::remove($item->rowId, $item->qty - 1);

    $cart = Cart::content();
    return view('cart')->with('cart', array('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));

    }
}
/*

if (Request::get('product_id') && (Request::get('decrease')) == 1) {
        $item = Cart::search(function($key, $value) { return $key->id == Request::  get('product_id'); })->first();
        Cart::update($item->rowId, $item->qty - 1);
    }*/
/*if (Request::get('product_id') && (Request::get('decrease')) == 1) {
        $rowId = Cart::search(array('id' => Request::get('product_id')));
        $item = Cart::get($rowId[0]);

        Cart::update($rowId[0], $item->qty - 1);