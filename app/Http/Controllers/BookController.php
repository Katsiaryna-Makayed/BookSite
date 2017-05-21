<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;
use App\Categories;

class BookController extends Controller
{


	public function getFilter($id1 = 0, $id = 0)
	   	{

			$price = (isset($_GET['price'])) ? $_GET['price'] : 'price-up'; 

	   		$year = (isset($_GET['year'])) ? $_GET['year'] : 'new-first';

	   		$popularity = (isset($_GET['popularity'])) ? $_GET['popularity'] : 'popular-first';

	   		$books=Products::where('showhide', 'show')->where('categories_id', $id)->filteryear($year)->filterpopularity($popularity)->filterprice($price)->get();
			$category=Categories::find($id);
			return view('good')->with('books', $books)->with('category', $category);	
	   	}
}
