<?php

// Accueil et Login
Route::get('/', function () {
    return view('index');
})->name('accueil');

// Le User
Route::get('/user', 'UserController@index')->name('Userindex');
Route::get('/user/{id}', 'UserController@show')->name('Usershow');

// Le Contact
Route::post('/contact', 'ContactController@send')->name('SendContact');
Route::get('/contact', 'ContactController@formulary')->name('FormularyContact');

// Le Planning
Route::get('/plannings', 'PlanningController@index')->name('PlanningIndex');

// TDL
Route::get('/todolists', 'TodolistController@index')->name('TodolistIndex');
Route::get('/todolists/{id}', 'TodolistController@show')->name('TodolistShow');
Route::get('/todolists/create', 'TodolistController@create')->name('TodolistCreate');

// Liste de présence
Route::get('/presences', 'PresenceController@index')->name('PresenceIndex');
Route::get('/presences/{id}', 'PresenceController@show')->name('PresenceShow');

// Admin
Route::group(['prefix' => 'admin', 'middleware' => 'can:access-admin'], function () {
    Route::get('/users', 'AdminUserController@index')->name('AdminUserIndex');
    Route::get('/user/{id}', 'Admin\UserController@show')->name('AdminUserShow');
    Route::get('/user/create', 'AdminUserController@create')->name('AdminUserCreate');
    Route::post('/user/{id}/update', 'Admin\UserController@update')->name('AdminUserUpdate');
    Route::get('/user/{id}/edit', 'Admin\UserController@edit')->name('AdminUserEdit');
    Route::get('/user/{id}/destroy', 'Admin\UserController@destroy')->name('AdminUserDestroy');
    Route::get('/dashboard', 'Admin\UserController@dashboard')->name('AdminUserDashboard');

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

