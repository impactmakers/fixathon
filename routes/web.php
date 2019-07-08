<?php


Route::get('/', function () { return view('landing'); })->name('landing');

// Auth routes the login, register, remember password
Auth::routes();

Route::view('/ideas', 'ideas')->name('ideas');
Route::view('/codeOfConduct', 'coc')->name('coc');


Route::get('/participants', 'HomeController@participants')->name('participants');
Route::get('/event', 'HomeController@event')->name('event');
