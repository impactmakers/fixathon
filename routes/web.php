<?php

Route::get('/', function () { return view('landing'); })->name('landing');

//Requests
Route::get('/participants', 'HomeController@participants')->name('participants');
Route::get('/event', 'HomeController@event')->name('event');


// Auth routes the login, register, remember password
Auth::routes();


//Views
Route::view('/ideas', 'ideas')->name('ideas');
Route::view('/codeOfConduct', 'coc')->name('coc');
Route::view('/faq', 'faq')->name('faq');


//Login/Register
Route::get('login/makerlog', 'Auth\LoginController@redirectToProvider');
Route::get('login/makerlog/callback', 'Auth\LoginController@handleProviderCallback');
