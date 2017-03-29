<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Goods;
use App\Http\Requests\CreateGoodsRequest;
use App\Http\Requests\UpdateGoodsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Authors;
use App\Categories;
use App\User;


class GoodsController extends Controller {

	/**
	 * Display a listing of goods
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $goods = Goods::with("authors")->with("categories")->with("user")->get();

		return view('admin.goods.index', compact('goods'));
	}

	/**
	 * Show the form for creating a new goods
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $authors = Authors::pluck("fio", "id")->prepend('Please select', null);
$categories = Categories::pluck("name", "id")->prepend('Please select', null);
$user = User::pluck("email", "id")->prepend('Please select', null);

	    
        $vip = Goods::$vip;
        $showhide = Goods::$showhide;

	    return view('admin.goods.create', compact("authors", "categories", "user", "vip", "showhide"));
	}

	/**
	 * Store a newly created goods in storage.
	 *
     * @param CreateGoodsRequest|Request $request
	 */
	public function store(CreateGoodsRequest $request)
	{
	    $request = $this->saveFiles($request);
		Goods::create($request->all());

		return redirect()->route(config('quickadmin.route').'.goods.index');
	}

	/**
	 * Show the form for editing the specified goods.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$goods = Goods::find($id);
	    $authors = Authors::pluck("fio", "id")->prepend('Please select', null);
		$categories = Categories::pluck("name", "id")->prepend('Please select', null);
		$user = User::pluck("email", "id")->prepend('Please select', null);

	    
        $vip = Goods::$vip;
        $showhide = Goods::$showhide;

		return view('admin.goods.edit', compact('goods', "authors", "categories", "user", "vip", "showhide"));
	}

	/**
	 * Update the specified goods in storage.
     * @param UpdateGoodsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateGoodsRequest $request)
	{
		$goods = Goods::findOrFail($id);

        $request = $this->saveFiles($request);

		$goods->update($request->all());

		return redirect()->route(config('quickadmin.route').'.goods.index');
	}

	/**
	 * Remove the specified goods from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Goods::destroy($id);

		return redirect()->route(config('quickadmin.route').'.goods.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Goods::destroy($toDelete);
        } else {
            Goods::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.goods.index');
    }

}
