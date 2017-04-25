<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Products;
use App\Authors;


class SearchController extends Controller
{
	public function getIndex(){
		$category = Categories::where('name', 'LIKE', '%'.$_POST['search'].'%')->get();
		$product = Products::where('name', 'LIKE', '%'.$_POST['search'].'%')->get();
		$author = Authors::where('fio', 'LIKE', '%'.$_POST['search'].'%')->get();
		return view('search')->with('categories', $category)->with('products', $product)->with('authors', $author);
	}
}
