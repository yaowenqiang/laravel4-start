<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('post',['uses'=>'PostController@index','as'=>'posts']);
Route::get('blog',['uses'=>'PostController@index','as'=>'posts']);
//Route::get('blog/{id}',['uses'=>'PostController@show','as'=>'posts.single'])->where(['id'=>'[1-9][0-9]*']);
Route::get('blog/{id}/{date}/',['uses'=>'PostController@show','as'=>'posts.single'])->where(['id'=>'[1-9][0-9]*','date'=>'[0-9]{4}']);
//Route::get('post',"PostController@index");
