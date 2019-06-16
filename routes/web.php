<?php

Route::get('/', function () { return view('landing'); })->name('landing');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ideas', 'HomeController@ideas')->name('ideas');

Route::get('/blog/{slug?}', function($slug = null) {
	return File::get(public_path().'/blog/dist/'.$slug);
});