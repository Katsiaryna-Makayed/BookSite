<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Goods;


class GenreController extends Controller
{
    public function getIndex($id){
		$cat_number=Categories::find($id);		
		return view('good')->with('cat_number', $cat_number);	
	}
}
