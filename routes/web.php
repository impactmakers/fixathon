<?php

Route::get('/', function () { return view('landing'); })->name('landing');
Route::get('/welcome', 'HomeController@welcome')->name('welcome');

//Requests
Route::get('/participants/{page?}', 'HomeController@participants')->name('participants');
Route::get('/products/{page?}', 'HomeController@products')->name('products');
Route::get('/event', 'HomeController@event')->name('event');
Route::get('/teamMembers/{product}', 'HomeController@teamMembers')->name('teamMembers');

// Auth routes the login, register, remember password
Auth::routes();

//Views
//Route::view('/ideas', 'ideas')->name('ideas');
Route::view('/codeOfConduct', 'coc')->name('coc');
Route::view('/faq', 'faq')->name('faq');
Route::view('/entries','allProducts')->name('allProducts');

//Login/Register
Route::get ( '/redirect/{service}', 'SocialAuthController@redirect' );
Route::get ( '/callback/{service}', 'SocialAuthController@callback' );
