<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //$users = DB::table('users')->get();
        $users = DB::table('users')->join('posts','users.id','=','posts.user_id')->get();
        //dd(DB::getQueryLog());
        return View::make('users.index',compact('users'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        //
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        //$user = DB::table('users')->where(['id'=>$id])->first();
        //$user = DB::table('users')->where('id',$id)->first();
        //$user = DB::table('users')->where('id',$id)->orWhere['id'=>$id]()->first();
        //$user = DB::table('users')->where('id',$id)->first();
        //$count= DB::table('users')->count();
        //$count= DB::table('users')->lists(['username','id']);
        //$count= DB::table('users')->max('id');
        //$count= DB::table('users')->where('id','>',1)->orderBy('id','desc')->take(2)->skip(10)->get();
        //$user = DB::table('users')->join('posts','users.id','=','posts.user_id')->get();
        $user = User::with('phone')->with('categories')->find($id);
        return View::make('users.show',compact('user'));
		//
	}


	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
