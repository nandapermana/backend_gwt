<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',[
	'uses' => 'MenuController@index',
	'as'   => 'go_index',
]);

Route::get('/menu',[
	'uses' => 'MenuController@menu',
	'as'   => 'go_menu',
]);

Route::get('/tentang_kami',[
	'uses' => 'MenuController@about',
	'as'   => 'go_about',
]);

Route::get('/audit',[
	'uses' => 'MenuController@audit',
	'as'   => 'go_audit',
]);