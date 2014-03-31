<?php

class PostController extends \BaseController {


	public function __construct()
	{
		//include parent constructor
		parent::__construct();

		//run an auth filter before all methods except index and show.
		$this->beforeFilter('auth.basic', ['except' => ['index', 'show']]);
	}





	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$posts = Post::orderBy('created_at', 'desc')->paginate(4);
		return View::make('posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return View::make('posts.create')->with('post');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Log::info(Input::all());	
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails())
	    {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', 'Post could not be created, please check errors');
	        return Redirect::back()->withInput()->withErrors($validator);
	    }
	    else
	    {	
	    	 // validation succeeded, create and save the post
	        $post = new Post();
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();
			Session::flash('successMessage', 'Post Created Succesfully');
			return Redirect::action('PostController@index'); // create the validator
	    }

		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.show')->with(array('post' => $post));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);	
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails())
	    {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	         Session::flash('errorMessage', 'Post could not be updated, please check errors');
	        return Redirect::back()->withInput()->withErrors($validator);
	    }
	    else
	    {	
	    	 // validation succeeded, create and save the post
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();
			Session::flash('successMessage', 'Post Updated Succesfully');
			return Redirect::action('PostController@index'); // create the validator
	    }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::findOrFail($id)->delete();
		Session::flash('successMessage', 'Post Deleted Succesfully');
		return Redirect::action('PostController@index');
	}

}