<?php

Route::get('/', function () { return view('landing'); })->name('landing');

Auth::routes();

Route::view('/ideas', 'ideas')->name('ideas');
