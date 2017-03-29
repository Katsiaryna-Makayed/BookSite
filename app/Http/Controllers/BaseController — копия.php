<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
	
	public function getIndex(){
		//$text = Goods:: where('url', 'index')->first();
		$all=Books::where('showhide','show')->paginate(10);		
		return view('try')->with('all', $all);		
	}
}
