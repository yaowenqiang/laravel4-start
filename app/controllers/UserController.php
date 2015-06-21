<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $faker = Faker\Factory::create();
        $users = [];
        for ($i = 0; $i < 3; $i++) {
            $user = new stdclass;
            $user->name = $faker->username;
            $user->email = $faker->email;
            $user->password = Hash::make($faker->text);
            $users[] = $user;
        }
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
        $faker = Faker\Factory::create();
        $user = new stdclass;
        $user->name = $faker->username;
        $user->email = $faker->email;
        $user->password = Hash::make($faker->text);
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
