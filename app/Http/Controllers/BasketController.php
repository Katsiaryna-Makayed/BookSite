<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Book;


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
    public function getIndex(){
		//$text = Goods:: where('url', 'index')->first();
		$all=Books::where('showhide','show')->paginate(10);		
		return view('try')->with('all', $all);		
	}
}
