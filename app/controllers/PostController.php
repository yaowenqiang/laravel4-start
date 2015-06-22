<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /post
	 *
	 * @return Response
	 */
	public function index()
	{
        //$posts = Posts::all();
        $posts = Posts::with('user')->get();
        //$posts = Posts::where('title','like','%post%')->get();
        //$posts = Posts::where('title','like','%post%')->take(1)->skip(1)->get();
        return View::make('post.list',compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /post/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /post
	 *
	 * @return Response
	 */
	public function store()
	{
        $post = new Post;
        //$post->title='test title';
        //$post->body='test body';
        $data = [
            'title'=>'title',
            'body'=>'body',
            'user_id'=>1
        ];;
        Posts::create($data);
        $post->save();
	}

	/**
	 * Display the specified resource.
	 * GET /post/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id,$date)
	{
        $post = Posts::find($id);
        //return View::make('post.detail')->with(['id'=>$id,'date'=>$date]);
        return View::make('post.detail',compact('post'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /post/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /post/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $post = Posts::find($id);
        $post->user_id = 1;
        $post->save();
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /post/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        Posts::where('id',$id)->delete();
	}

}
