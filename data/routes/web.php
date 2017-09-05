<?php
Route::get('/', function () {
    return view('test');
})->name('accueil');

// Ajout par php artisan make:auth pour le login
Auth::routes();

// Pour le User
Route::get('/user', 'UserController@index')->name('Userindex');
Route::get('/user/{id}', 'UserController@show')->name('Usershow');

Route::get('/contacts', 'ContactController@index')->name('ContactIndex');
Route::get('/contacts/{id}', 'ContactController@show')->name('ContactShow');

Route::get('/plannings', 'PlanningController@index')->name('PlanningIndex');
Route::get('/plannings/{id}', 'PlanningController@show')->name('PlanningShow');
Route::get('/plannings/{id}/edit', 'PlanningController@edit')->name('PlanningEdit');

Route::get('/todolists', 'TodolistController@index')->name('TodolistIndex');
Route::get('/todolists/{id}', 'TodolistController@show')->name('TodolistShow');
Route::get('/todolists/create', 'TodolistController@create')->name('TodolistCreate');

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

    Route::get('/contacts', 'AdminContactController@index')->name('AdminContactIndex');
    Route::get('/contacts/{id}', 'AdminContactController@show')->name('AdminContactShow');
    Route::get('/contacts/create/', 'AdminContactController@create')->name('AdminContactCreate');
    Route::post('/contacts/{id}/update', 'AdminContactController@update')->name('AdminContactUpdate');
    Route::get('/contacts/{id}/edit', 'AdminContactController@edit')->name('AdminContactEdit');
    Route::get('/contacts/{id}/destroy', 'AdminContactController@destroy')->name('AdminContactDestroy');

    Route::get('/plannings', 'AdminPlanningController@index')->name('AdminPlanningIndex');
    Route::get('/plannings/{id}', 'AdminPlanningController@show')->name('AdminPlanningShow');
    Route::get('/plannings/create', 'AdminPlanningController@create')->name('AdminPlanningCreate');
    Route::post('/plannings/{id}/update', 'AdminPlanningController@update')->name('AdminPlanningUpdate');
    Route::get('/plannings/{id}/edit', 'AdminPlanningController@edit')->name('AdminPlanningEdit');
    Route::get('/plannings/{id}/destroy', 'AdminPlanningController@destroy')->name('AdminPlanningDestroy');

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