<?php
// Prof
Route::group(['prefix' => 'teachers', 'middleware' => 'can:access-teacher'], function () {

    Route::get('/', 'Teachers\DashboardController@index')->name('TeacherDashboard');
    
    Route::get('/todolists', 'Teachers\TodolistController@index')->name('TeacherTodolistIndex');
    Route::get('/todolists/{id}', 'Teachers\TodolistController@show')->name('TeacherTodolistShow');
    Route::get('/todolists/create', 'Teachers\TodolistController@create')->name('TeacherTodolistCreate');
    Route::post('/todolists/{id}/update', 'Teachers\TodolistController@update')->name('TeacherTodolistUpdate');
    Route::get('/todolists/{id}/edit', 'Teachers\TodolistController@edit')->name('TeacherTodolistEdit');
    Route::get('/todolists/{id}/destroy', 'Teachers\TodolistController@destroy')->name('TeacherTodolistDestroy');
    Route::post('/todolists/store', 'Teachers\TodolistController@store')->name('TeacherTodolistStore');

    Route::get('/presences', 'Teachers\PresenceController@index')->name('TeacherPresenceIndex');
    Route::get('/presences/{id}', 'Teachers\PresenceController@show')->name('TeacherPresenceShow');
    Route::get('/presences/create', 'Teachers\PresenceController@create')->name('TeacherPresenceCreate');
    Route::post('/presences/{id}/update', 'Teachers\PresenceController@update')->name('TeacherPresenceUpdate');
    Route::get('/presences/{id}/edit', 'Teachers\PresenceController@edit')->name('TeacherPresenceEdit');
    Route::get('/presences/{id}/destroy', 'Teachers\PresenceController@destroy')->name('TeacherPresenceDestroy');
    Route::post('/presences/store', 'Teachers\PresenceController@store')->name('TeacherPresenceStore');

    Route::get('/users', 'Teachers\UserController@index')->name('TeacherUserIndex');
    Route::get('/users/{id}', 'Teachers\UserController@show')->name('TeacherUserShow');
//    Route::get('/users/create', 'Teachers\UserController@create')->name('TeacherUserCreate');
//    Route::post('/users/store', 'Teachers\UserController@store')->name('TeacherUserStore');
    Route::get('/users/{id}/edit', 'Teachers\UserController@edit')->name('TeacherUserEdit');
    Route::post('/users/{id}/update', 'Teachers\UserController@update')->name('TeacherUserUpdate');
    Route::get('/users/{id}/destroy', 'Teachers\UserController@destroy')->name('TeacherUserDestroy');

//    Route::get('/admin/users/create', 'Auth\RegisterController@showRegistrationForm')->name('register');
//    Route::post('/admin/users/save', 'Auth\RegisterController@register');

    Route::get('/plannings', 'Teachers\PlanningController@index')->name('TeacherPlanningIndex');
    Route::get('/plannings/{id}', 'Teachers\PlanningController@show')->name('TeacherPlanningShow');
    Route::get('/plannings/create', 'Teachers\PlanningController@create')->name('TeacherPlanningCreate');
    Route::post('/plannings/store', 'Teachers\PlanningController@store')->name('TeacherPlanningStore');
    Route::get('/plannings/{id}/edit', 'Teachers\PlanningController@edit')->name('TeacherPlanningEdit');
    Route::post('/plannings/{id}/update', 'Teachers\PlanningController@update')->name('TeacherPlanningUpdate');
    Route::get('/plannings/{id}/destroy', 'Teachers\PlanningController@destroy')->name('TeacherPlanningDestroy');

});