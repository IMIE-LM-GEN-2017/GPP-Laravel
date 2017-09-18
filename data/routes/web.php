<?php


// Login et récupération de mdp
Route::get('/', 'Auth\LoginController@showLoginForm')->name('home');
//Route::post('/', 'Auth\LoginController@login')->name('login');
//Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
//Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
//Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('passwordreset');

Route::get('/menu', 'HomeController@index')->name('menu');
//Route::get('/interface', 'HomeController@admin')->name('interface');

// Le Contact
Route::post('/contact/send', 'ContactController@send')->name('SendContact');
Route::get('/contact/form', 'ContactController@form')->name('FormContact');
Route::get('/contact', 'ContactController@index')->name('IndexContact');

// Le Planning
Route::get('/plannings', 'PlanningController@index')->name('PlanningIndex');

// TDL
Route::get('/todolists', 'TodolistController@index')->name('TodolistIndex');

Route::get('/todolists/todo', 'TodolistController@afaire')->name('TodolistAfaire');
Route::get('/todolists/doing', 'TodolistController@encours')->name('TodolistEncours');
Route::get('/todolists/done', 'TodolistController@termines')->name('TodolistTermines');

Route::get('/todolists/create', 'TodolistController@create')->name('TodolistCreate');
Route::post('/todolists/{id}/update', 'TodolistController@update')->name('TodolistUpdate');
Route::get('/todolists/{id}/edit', 'TodolistController@edit')->name('TodolistEdit');

// Users
Route::get('/users/create', 'Auth\RegisterController@showRegistrationForm');

include 'web.admin.php';
include 'web.teacher.php';

Auth::routes();