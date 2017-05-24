<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Products;
use App\Categories;
use App\Http\Requests\CreateOrderRequest;


class BookController extends Controller
{

    public function order(CreateOrderRequest $request)
    {
        $all=$request->all();

        $all['user_id'] = Auth::user()->id;
        $all['status'] = 'just ordered';
        $cart = unserialize($all['body']);
        dd($cart); 

        $find = Cart::find($cart->id);
//        $all['body'] = 
        Order::create($all);

        return view('order');
    }

	public function getFilter($id1 = 0, $id = 0)
	   	{

			$price = (isset($_GET['price'])) ? $_GET['price'] : 'price-up'; 

	   		// $year = (isset($_GET['year'])) ? $_GET['year'] : 'new-first';

	   		// $popularity = (isset($_GET['popularity'])) ? $_GET['popularity'] : 'popular-first';

	   		$books=Products::where('showhide', 'show')->where('categories_id', $id)->Filterprice($price)->get();
			$category=Categories::find($id);
			return view('good')->with('books', $books)->with('category', $category);	
	   	}
}
