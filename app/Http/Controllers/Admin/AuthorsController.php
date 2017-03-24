<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Authors;
use App\Http\Requests\CreateAuthorsRequest;
use App\Http\Requests\UpdateAuthorsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class AuthorsController extends Controller {

	/**
	 * Display a listing of authors
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $authors = Authors::all();

		return view('admin.authors.index', compact('authors'));
	}

	/**
	 * Show the form for creating a new authors
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
        $showhide = Authors::$showhide;
        $vip = Authors::$vip;

	    return view('admin.authors.create', compact("showhide", "vip"));
	}

	/**
	 * Store a newly created authors in storage.
	 *
     * @param CreateAuthorsRequest|Request $request
	 */
	public function store(CreateAuthorsRequest $request)
	{
	    $request = $this->saveFiles($request);
		Authors::create($request->all());

		return redirect()->route(config('quickadmin.route').'.authors.index');
	}

	/**
	 * Show the form for editing the specified authors.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$authors = Authors::find($id);
	    
	    
        $showhide = Authors::$showhide;
        $vip = Authors::$vip;

		return view('admin.authors.edit', compact('authors', "showhide", "vip"));
	}

	/**
	 * Update the specified authors in storage.
     * @param UpdateAuthorsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateAuthorsRequest $request)
	{
		$authors = Authors::findOrFail($id);

        $request = $this->saveFiles($request);

		$authors->update($request->all());

		return redirect()->route(config('quickadmin.route').'.authors.index');
	}

	/**
	 * Remove the specified authors from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Authors::destroy($id);

		return redirect()->route(config('quickadmin.route').'.authors.index');
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
            Authors::destroy($toDelete);
        } else {
            Authors::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.authors.index');
    }

}
