<?php

Route::get('/', function () { return view('landing'); })->name('landing');

// Auth routes the login, register, remember password
Auth::routes();

Route::view('/ideas', 'ideas')->name('ideas');
Route::view('/faq', 'faq')->name('faq');
Route::view('/codeOfConduct', 'coc')->name('coc');