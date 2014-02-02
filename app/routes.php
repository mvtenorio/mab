<?php

Route::get('/', function()
{
	return View::make('index');
});

Route::get('movies/movies.json', function()
{
	return Movie::all()->toJSON();
});

Route::get('partials/{page}', function($page)
{
	return file_get_contents(app_path() . '/views/partials/' . $page);
});