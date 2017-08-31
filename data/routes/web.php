<?php
Route::get('/', function(){
    return view('test');
})->name('home');

// Ajout par php artisan make:auth pour le login
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
