<?php 

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Categories;

class TopmenuComposer{
	public function compose(View $view)
	{
		$catalogs = Categories::where('showhide', 'show')->where('parent_id', '0')->get();
		
		$view->with('catalogs', $catalogs);
	}
}