<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Maintext;
use App\Products;
use App\Authors;
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
        $new_books = Products::where('showhide', 'show')->orderBy('created_at', 'DESC')->get();
        $sale_books = Products::where('showhide', 'show')->orderBy('sale', 'sale_5')->get();
        $pop_books = Products::where('showhide', 'show')->orderBy('quantity', 'DESC')->get();
        return view('home')->with('new_books', $new_books)->with('sale_books', $sale_books)->with('pop_books', $pop_books);
         
         
    } 
    
    public function getNew(){
        $new_books = Products::where('showhide', 'show')->orderBy('created_at', 'DESC')->get();
        return view('new')->with('new_books', $new_books);
        
    } 
    
    public function getSales(){
        $sale_5 = Products::where('showhide', 'show')->where('sale', 'sale_5')->get();
        $sale_10 = Products::where('showhide', 'show')->where('sale', 'sale_10')->get();
        $sale_15 = Products::where('showhide', 'show')->where('sale', 'sale_15')->get();
        return view('sales')->with('sale_5', $sale_5)->with('sale_10', $sale_10)->with('sale_15', $sale_15);
    } 
    
    public function getAuthors($id){
        $author = Authors::find($id);
        $author_books = Products::where('showhide', 'show')->where('authors_id', $id)->get();
        return view('author')->with('author', $author)->with('author_books', $author_books);
        
    } 
    
    public function contact(){
        return view('about');
    }
    /*public function getIndex(){
        //$text = Goods:: where('url', 'index')->first();
        $all=Books::where('showhide','show')->paginate(10);     
        return view('try')->with('all', $all);      
    }*/
}

