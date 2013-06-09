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

Route::get('login', 'HomeController@getIndex');

Route::get('register', 'HomeController@getRegister');

Route::get('grid', 'HomeController@getGrid');

Route::get('list', 'HomeController@getList');

/*
proposed routes:

about - about page
submit - form to submit a project (including a screenshot of the site, but not required)
browse - search projects by tags, category, date added , maybe Laravel features used in the project, etc

admin
	- submissions
	- projects (approved)
	- users
	- site settings

*/