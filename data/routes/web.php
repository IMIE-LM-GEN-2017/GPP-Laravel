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
Route::get('/interface', 'HomeController@admin')->name('interface');

// Le Contact
Route::post('/contact/send', 'ContactController@send')->name('SendContact');
Route::get('/contact/form', 'ContactController@form')->name('FormContact');
Route::get('/contact', 'ContactController@index')->name('IndexContact');

// Le Planning
Route::get('/plannings', 'PlanningController@index')->name('PlanningIndex');

// TDL
Route::get('/todolists', 'TodolistController@index')->name('TodolistIndex');

Route::get('/todolists/{id}', 'TodolistController@afaire')->name('TodolistAfaire');
Route::get('/todolists/{id}', 'TodolistController@encours')->name('TodolistEncours');
Route::get('/todolists/{id}', 'TodolistController@termines')->name('TodolistTermines');

Route::get('/todolists/create', 'TodolistController@create')->name('TodolistCreate');
Route::post('/todolists/{id}/update', 'TodolistController@update')->name('TodolistUpdate');
Route::get('/todolists/{id}/edit', 'TodolistController@edit')->name('TodolistEdit');

// Users
Route::get('/users/create', 'Auth\RegisterController@showRegistrationForm');
Route::post('/users/save', 'Auth\RegisterController@register')->name('register');

// Admin
Route::group(['prefix' => 'admin', 'middleware' => 'can:access-admin'], function () {

    Route::get('/todolists', 'Admin\TodolistController@index')->name('AdminTodolistIndex');
    Route::get('/todolists/{id}', 'Admin\TodolistController@show')->name('AdminTodolistShow');
    Route::get('/todolists/create', 'Admin\TodolistController@create')->name('AdminTodolistCreate');
    Route::post('/todolists/{id}/update', 'Admin\TodolistController@update')->name('AdminTodolistUpdate');
    Route::get('/todolists/{id}/edit', 'Admin\TodolistController@edit')->name('AdminTodolistEdit');
    Route::get('/todolists/{id}/destroy', 'Admin\TodolistController@destroy')->name('AdminTodolistDestroy');
    Route::post('/todolists/store', 'Admin\TodolistController@store')->name('AdminTodolistStore');

    Route::get('/presences', 'Admin\PresenceController@index')->name('AdminPresenceIndex');
    Route::get('/presences/{id}', 'Admin\PresenceController@show')->name('AdminPresenceShow');
    Route::get('/presences/create', 'Admin\PresenceController@create')->name('AdminPresenceCreate');
    Route::post('/presences/{id}/update', 'Admin\PresenceController@update')->name('AdminPresenceUpdate');
    Route::get('/presences/{id}/edit', 'Admin\PresenceController@edit')->name('AdminPresenceEdit');
    Route::get('/presences/{id}/destroy', 'Admin\PresenceController@destroy')->name('AdminPresenceDestroy');
    Route::post('/presences/store', 'Admin\PresenceController@store')->name('AdminPresenceStore');

    Route::get('/users', 'Admin\UserController@index')->name('AdminUserIndex');
    Route::get('/users/{id}', 'Admin\UserController@show')->name('AdminUserShow');
//    Route::get('/users/create', 'Admin\UserController@create')->name('AdminUserCreate');
//    Route::post('/users/store', 'Admin\UserController@store')->name('AdminUserStore');
    Route::get('/users/{id}/edit', 'Admin\UserController@edit')->name('AdminUserEdit');
    Route::post('/users/{id}/update', 'Admin\UserController@update')->name('AdminUserUpdate');
    Route::get('/users/{id}/destroy', 'Admin\UserController@destroy')->name('AdminUserDestroy');

//    Route::get('/admin/users/create', 'Auth\RegisterController@showRegistrationForm')->name('register');
//    Route::post('/admin/users/save', 'Auth\RegisterController@register');

    Route::get('/plannings', 'Admin\PlanningController@index')->name('AdminPlanningIndex');
    Route::get('/plannings/{id}', 'Admin\PlanningController@show')->name('AdminPlanningShow');
    Route::get('/plannings/create', 'Admin\PlanningController@create')->name('AdminPlanningCreate');
    Route::post('/plannings/store', 'Admin\PlanningController@store')->name('AdminPlanningStore');
    Route::get('/plannings/{id}/edit', 'Admin\PlanningController@edit')->name('AdminPlanningEdit');
    Route::post('/plannings/{id}/update', 'Admin\PlanningController@update')->name('AdminPlanningUpdate');
    Route::get('/plannings/{id}/destroy', 'Admin\PlanningController@destroy')->name('AdminPlanningDestroy');

});

Auth::routes();