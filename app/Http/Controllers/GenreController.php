<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Products;
use App\Comments;
use App\Authors;
use Auth;



class GenreController extends Controller
{
    public function getCategory($id){

    	$category = Categories::where('showhide', 'show')->where('parent_id', $id)->get();
		$category_one = Categories::where('showhide', 'show')->where('id', $id)->first();
		return view('category')->with('category', $category)->with('category_one', $category_one);	
	}

	public function getGoods($id1 = 0, $id = 0){
		$books=Products::where('showhide', 'show')->where('categories_id', $id)->get();
		$category=Categories::find($id);
		return view('good')->with('books', $books)->with('category', $category);	
	}

	public function getBook($id){
		$book = Products::find($id);
		// dd($book);
		//$author = $book->authors_id;
		$author_books = Products::where('showhide', 'show')->where('authors_id', $book->authors_id)->get();

		$user = Auth::user();

		$comments = Comments::where('showhide', 'show')->where('products_id', $id)->get();
//		$comments=Products::where('showhide', 'show')->find($id)->comments; // выбираем все комментарии, который относятся к статье


		return view('try')->with('book', $book)->with('author_books', $author_books)->with('comments', $comments)->with('user', $user);	
	}
	public function checkPanel($id1 = 0, $id = 0)
	{
		$books=Products::where('showhide', 'show')->where('categories_id', $id);
		
		if(isset($_POST['price']))
		{
			if($_POST['price'] == 'price-up') {
				$books->orderBy('price', 'ASC')->get();
			}
			else $books=Products::where('showhide', 'show')->where('categories_id', $id)->orderBy('price', 'DESC')->get();
			 
		}

		// if(isset($_POST['year']))
		// {
		// 	if($_POST['year'] == 'new-first') {
		// 		$books=Products::where('showhide', 'show')->where('categories_id', $id)->orderBy('year', 'ASC')->get();
		// 	}
		// 	else $books=Products::where('showhide', 'show')->where('categories_id', $id)->orderBy('year', 'DESC')->get();
			 
		// }


		return view('good')->with('books', $books);	
	}
}

