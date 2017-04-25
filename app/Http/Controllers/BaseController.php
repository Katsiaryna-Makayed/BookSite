<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Maintext;
use App\Products;

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
        $new_books = Products::where('showhide', 'show')->orderBy('created_at', 'DESC')->limit(4)->get();
        $sale_books = Products::where('showhide', 'show')->orderBy('vip', 'DESC')->limit(4)->get();
        $pop_books = Products::where('showhide', 'show')->orderBy('vip', 'DESC')->limit(4)->get();
        return view('home')->with('new_books', $new_books)->with('sale_books', $sale_books)->with('pop_books', $pop_books);
         
         
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
