<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Comments;
use App\Http\Requests\CreateCommentsRequest;
use App\Http\Requests\UpdateCommentsRequest;
use Illuminate\Http\Request;

use App\Products;
use App\User;


class CommentsController extends Controller {

	/**
	 * Display a listing of comments
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $comments = Comments::with("products")->with("user")->get();

		return view('admin.comments.index', compact('comments'));
	}

	/**
	 * Show the form for creating a new comments
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $products = Products::pluck("name", "id")->prepend('Please select', null);
$user = User::pluck("name", "id")->prepend('Please select', null);

	    
        $showhide = Comments::$showhide;

	    return view('admin.comments.create', compact("products", "user", "showhide"));
	}

	/**
	 * Store a newly created comments in storage.
	 *
     * @param CreateCommentsRequest|Request $request
	 */
	public function store(CreateCommentsRequest $request)
	{
	    
		Comments::create($request->all());

		return redirect()->route(config('quickadmin.route').'.comments.index');
	}

	/**
	 * Show the form for editing the specified comments.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$comments = Comments::find($id);
	    $products = Products::pluck("name", "id")->prepend('Please select', null);
$user = User::pluck("name", "id")->prepend('Please select', null);

	    
        $showhide = Comments::$showhide;

		return view('admin.comments.edit', compact('comments', "products", "user", "showhide"));
	}

	/**
	 * Update the specified comments in storage.
     * @param UpdateCommentsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateCommentsRequest $request)
	{
		$comments = Comments::findOrFail($id);

        

		$comments->update($request->all());

		return redirect()->route(config('quickadmin.route').'.comments.index');
	}

	/**
	 * Remove the specified comments from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Comments::destroy($id);

		return redirect()->route(config('quickadmin.route').'.comments.index');
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
            Comments::destroy($toDelete);
        } else {
            Comments::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.comments.index');
    }

}
