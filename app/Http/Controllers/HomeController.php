<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Products;

class HomeController extends Controller
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
    public function index()
    {
        $new_books = Products::where('showhide', 'show')->orderBy('created_at', 'DESC')->limit(4)->get();
        return view('home')->with('new_books', $new_books);  
    }
	public function getLogout(){
		if(Auth::user()){
			Auth::logout();
			return redirect('/');
		}
	}
}
