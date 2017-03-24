<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Maintext;

class StaticController extends Controller
{
	public function getindex ($id = null){
		$text = Maintext::where ('url', $id)->first();
		return view('index')->with('text', $text);
	}
    //
}
