<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Maintext;

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

	public function index(){
		$text = Maintext :: where('url', 'index')->first();
		return view('index')->with('text', $text);
		
	} 
	
	public function getIndex(){
		return view('home');
		
	} 
	
	public function getNew(){
		return view('new');
		
	} 
	
	public function getSales(){
		return view('sales');
		
	} 
	
	/*public function getIndex(){
		//$text = Goods:: where('url', 'index')->first();
		$all=Books::where('showhide','show')->paginate(10);		
		return view('try')->with('all', $all);		
	}*/
}
