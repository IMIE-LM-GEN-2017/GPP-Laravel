<?php

// Accueil et Login
Route::get('/', function () {
    return view('index');
})->name('index');

// Logout
Route::get('/logout', 'Auth\LoginController@logout');

// Le Contact
Route::post('/contact', 'ContactController@send')->name('SendContact');
Route::get('/contact', 'ContactController@formulary')->name('FormularyContact');

// Le Planning
Route::get('/plannings', 'PlanningController@index')->name('PlanningIndex');

// TDL
Route::get('/todolists', 'TodolistController@index')->name('TodolistIndex');
Route::get('/todolists/{id}', 'TodolistController@show')->name('TodolistShow');
Route::get('/todolists/create', 'TodolistController@create')->name('TodolistCreate');
Route::post('/todolists/{id}/update', 'TodolistController@update')->name('TodolistUpdate');
Route::get('/todolists/{id}/edit', 'TodolistController@edit')->name('TodolistEdit');

// Admin
Route::group(['prefix' => 'admin', 'middleware' => 'can:access-admin'], function () {
    Route::post('/register', 'AdminRegisterController@register')->name('AdminRegister');

    Route::get('/todolists', 'AdminTodolistController@index')->name('AdminTodolistIndex');
    Route::get('/todolists/{id}', 'AdminTodolistController@show')->name('AdminTodolistShow');
    Route::get('/todolists/create', 'AdminTodolistController@create')->name('AdminTodolistCreate');
    Route::post('/todolists/{id}/update', 'AdminTodolistController@update')->name('AdminTodolistUpdate');
    Route::get('/todolists/{id}/edit', 'AdminTodolistController@edit')->name('AdminTodolistEdit');
    Route::get('/todolists/{id}/destroy', 'AdminTodolistController@destroy')->name('AdminTodolistDestroy');
    Route::post('/todolists/store', 'Admin\TodolistController@store')->name('AdminTodolistStore');

    Route::get('/presences', 'AdminPresenceController@index')->name('AdminPresenceIndex');
    Route::get('/presences/{id}', 'AdminPresenceController@show')->name('AdminPresenceShow');
    Route::get('/presences/create', 'AdminPresenceController@create')->name('AdminPresenceCreate');
    Route::post('/presences/{id}/update', 'AdminPresenceController@update')->name('AdminPresenceUpdate');
    Route::get('/presences/{id}/edit', 'AdminPresenceController@edit')->name('AdminPresenceEdit');
    Route::get('/presences/{id}/destroy', 'AdminPresenceController@destroy')->name('AdminPresenceDestroy');
    Route::post('/presences/store', 'Admin\PresenceController@store')->name('AdminPresenceStore');

    Route::get('/users', 'AdminUserController@index')->name('AdminUserIndex');
    Route::get('/users/{id}', 'AdminUserController@show')->name('AdminUserShow');
    Route::get('/users/create', 'AdminUserController@create')->name('AdminUserCreate');
    Route::post('/users/{id}/update', 'AdminUserController@update')->name('AdminUserUpdate');
    Route::get('/users/{id}/edit', 'AdminUserController@edit')->name('AdminUserEdit');
    Route::get('/users/{id}/destroy', 'AdminUserController@destroy')->name('AdminUserDestroy');
    Route::post('/users/store', 'Admin\UsersController@store')->name('AdminUserStore');

    Route::get('/plannings', 'AdminPlanningController@index')->name('AdminPlanningIndex');
    Route::get('/plannings/{id}', 'AdminPlanningController@show')->name('AdminPlanningShow');
    Route::get('/plannings/create', 'AdminPlanningController@create')->name('AdminPlanningCreate');
    Route::post('/plannings/{id}/update', 'AdminPlanningController@update')->name('AdminPlanningUpdate');
    Route::get('/plannings/{id}/edit', 'AdminPlanningController@edit')->name('AdminPlanningEdit');
    Route::get('/plannings/{id}/destroy', 'AdminPlanningController@destroy')->name('AdminPlanningDestroy');
    Route::post('/plannings/store', 'Admin\PlanningController@store')->name('AdminPlanningStore');

});

// Ajout par php artisan make:auth pour le login et enregistrement
Auth::routes();

Route::get('/menu', 'HomeController@index')->name('menu');
