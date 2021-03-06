<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
	'uses' => 'ForumsController@index',
	'as' => 'forum'
	]);

Route::get('/discuss', function () {
    return view('discussion');
});

Route::get('/login', function () {
    return view('forum');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/call', function () {
    return view('calldiscussion');
});




Auth::routes();

Route::get('/forum', [
	'uses' => 'ForumsController@index',
	'as' => 'forum'
	]);

Auth::routes();


Route::group(['middleware' => 'auth'], function(){
				
		Route::resource('channels', 'ChannelsController');

		Route::get('discussion/create', [
		'uses' => 'DiscussionsController@create',
		'as'=> 'discussion.create'
	]);

		Route::post('discussion/store',[
			'uses' => 'DiscussionsController@store',
			'as' => 'discussion.store'
		]);

		Route::get('discussion/{slug}',[
			'uses' => 'DiscussionsController@show',
			'as' => 'discussion'
		]);

		Route::post('/discussion/reply/{id}',[
			'uses' => 'DiscussionsController@reply',
			'as' => 'discussion.reply'
		]);

		Route::get('/reply/like/{id}',[
			'uses'=> 'RepliesController@like',
			'as' => 'reply.like'
			]);

		Route::get('/reply/unlike/{id}',[
			'uses'=> 'RepliesController@unlike',
			'as' => 'reply.unlike'
			]);


	}); 