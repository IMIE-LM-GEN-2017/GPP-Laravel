<?php

// Accueil et Login
Route::get('/', function () {
    return view('index');
})->name('accueil');

// Register
Route::post('/register', 'RegisterController@register')->name('register');

// Logout
Route::get('/logout', 'Auth\LoginController@logout');

// Le Contact
Route::post('/contact', 'ContactController@send')->name('SendContact');
Route::get('/contact', 'ContactController@formulary')->name('FormularyContact');

// Le Planning
Route::get('/planning', 'PlanningController@index')->name('PlanningIndex');

// TDL
Route::get('/todolists', 'TodolistController@index')->name('TodolistIndex');
Route::get('/todolists/{id}', 'TodolistController@show')->name('TodolistShow');
Route::get('/todolists/create', 'TodolistController@create')->name('TodolistCreate');
Route::post('/todolists/{id}/update', 'TodolistController@update')->name('TodolistUpdate');
Route::get('/todolists/{id}/edit', 'TodolistController@edit')->name('TodolistEdit');

// Admin
Route::group(['prefix' => 'admin', 'middleware' => 'can:access-admin'], function () {

    Route::get('/todolists', 'AdminTodolistController@index')->name('AdminTodolistIndex');
    Route::get('/todolists/{id}', 'AdminTodolistController@show')->name('AdminTodolistShow');
    Route::get('/todolists/create', 'AdminTodolistController@create')->name('AdminTodolistCreate');
    Route::post('/todolists/{id}/update', 'AdminTodolistController@update')->name('AdminTodolistUpdate');
    Route::get('/todolists/{id}/edit', 'AdminTodolistController@edit')->name('AdminTodolistEdit');
    Route::get('/todolists/{id}/destroy', 'AdminTodolistController@destroy')->name('AdminTodolistDestroy');

    Route::get('/presences', 'AdminPresenceController@index')->name('AdminPresenceIndex');
    Route::get('/presences/{id}', 'AdminPresenceController@show')->name('AdminPresenceShow');
    Route::get('/presences/create', 'AdminPresenceController@create')->name('AdminPresenceCreate');
    Route::post('/presences/{id}/update', 'AdminPresenceController@update')->name('AdminPresenceUpdate');
    Route::get('/presences/{id}/edit', 'AdminPresenceController@edit')->name('AdminPresenceEdit');
    Route::get('/presences/{id}/destroy', 'AdminPresenceController@destroy')->name('AdminPresenceDestroy');

});

// Ajout par php artisan make:auth pour le login et enregistrement
Auth::routes();

Route::get('/menu', 'HomeController@index')->name('menu');
