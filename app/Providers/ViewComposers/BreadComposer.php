<?php 

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Categories;
use App\Products;
use App\Authors;

class BreadComposer{
	public function compose(View $view)
	{
		$url = $_SERVER['REQUEST_URI'];
		$category2 = null;
		$book = null;
		$second = null;
		$author = null;
		$category = null;
		$arr = explode('/', $url);
		if($arr[1] == 'genre' || $arr[1] == 'filter')
		{
			$category = Categories::where('showhide', 'show')->where('id', $arr[2])->first();
			if(isset($arr[3]))
			{
				$category2 = Categories::where('showhide', 'show')->where('id', $arr[3])->first();
			} 
		}
		else {
			$category = new Categories;
		}

		if($arr[1] == 'sales')
		{
			$second = 'Акции';
		}

		if($arr[1] == 'new')
		{
			$second = 'Новинки';
		}

		if($arr[1] == 'ourcontacts')
		{
			$second = 'Контакты';
		}

		if($arr[1] == 'cart')
		{
			$second = 'Корзина';
		}
		if($arr[1] == 'order')
		{
			$second = 'Заказ';
		}
		if($arr[1] == 'book')
		{
			$book = Products::where('showhide', 'show')->where('id', $arr[2])->first();
		}

		if($arr[1] == 'author')
		{
			$author = Authors::where('showhide', 'show')->where('id', $arr[2])->first();
		}



		$view->with('category', $category)->with('category2', $category2)->with('book', $book)->with('second', $second)->with('authorBread', $author);	
	}
}