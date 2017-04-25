<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
//use App\Book;


class BasketController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */




/*

    public function getIndex(){
     /*if($_REQUEST['in-cart-product-id']) 
     {
       $cart=new ApplicaCart;
       $cart->addToCart($_REQUEST['in-cart-product-id']);
       Lib_SmalCart::getInstance()->setCartData();
       header('Location: /catalog');
       exit;
     }
            
     $model=new Application_Models_Catalog;
     $Items = $model->getList();    
     $this->Items=$Items; 
            return view('basket');
      
     }
	

     public function postBasket(){

    Cart::add(455, 'Sample Item', 100.99, 2, array());
       //Cart::add($r->id, $r->name, $r->quantity, $r->price);
        return redirect('/home');

     }


   /* public function postIndex(Requests\GoodRequest $r)
    {

        $r['user_id'] = Auth::user()->id;
        $r['pic']='-';
        $f=\App::make('App\Libs\Imag')->url($_FILES['picture1']['tmp_name'],'/media/uploads/');
        $r['picture']=$f;
        $r['picture_small']='s_'.$f;
        Good::create($r->all());
        return redirect('/home');
    }*/
		
		//->with('all', $all);		
}
