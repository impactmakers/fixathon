<?php

Route::get('/', function () { return view('landing'); })->name('landing');
Route::get('/welcome', 'HomeController@welcome')->name('welcome');

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
//Route::get('login/makerlog', 'Auth\LoginController@redirectToProvider');
//Route::get('login/makerlog/callback', 'Auth\LoginController@handleProviderCallback');
//Route::get('callback/makerlog', 'Auth\LoginController@handleProviderCallback');

Route::get ( '/redirect/{service}', 'SocialAuthController@redirect' ); //Social
Route::get ( '/callback/{service}', 'SocialAuthController@callback' );
