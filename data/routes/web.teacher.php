<?php
// Prof
Route::group(['prefix' => 'teachers', 'middleware' => 'can:access-teacher'], function () {

    Route::get('/', 'Teacher\DashboardController@index')->name('TeacherDashboard');
    
    Route::get('/todolists', 'Teacher\TodolistController@index')->name('TeacherTodolistIndex');
    Route::get('/todolists/{id}', 'Teacher\TodolistController@show')->name('TeacherTodolistShow');
    Route::get('/todolists/create', 'Teacher\TodolistController@create')->name('TeacherTodolistCreate');
    Route::post('/todolists/{id}/update', 'Teacher\TodolistController@update')->name('TeacherTodolistUpdate');
    Route::get('/todolists/{id}/edit', 'Teacher\TodolistController@edit')->name('TeacherTodolistEdit');
    Route::get('/todolists/{id}/destroy', 'Teacher\TodolistController@destroy')->name('TeacherTodolistDestroy');
    Route::post('/todolists/store', 'Teacher\TodolistController@store')->name('TeacherTodolistStore');

    Route::get('/presences', 'Teacher\PresenceController@index')->name('TeacherPresenceIndex');
    Route::get('/presences/{id}', 'Teacher\PresenceController@show')->name('TeacherPresenceShow');
    Route::get('/presences/create', 'Teacher\PresenceController@create')->name('TeacherPresenceCreate');
    Route::post('/presences/{id}/update', 'Teacher\PresenceController@update')->name('TeacherPresenceUpdate');
    Route::get('/presences/{id}/edit', 'Teacher\PresenceController@edit')->name('TeacherPresenceEdit');
    Route::get('/presences/{id}/destroy', 'Teacher\PresenceController@destroy')->name('TeacherPresenceDestroy');
    Route::post('/presences/store', 'Teacher\PresenceController@store')->name('TeacherPresenceStore');

    Route::get('/users', 'Teacher\UserController@index')->name('TeacherUserIndex');
    Route::get('/users/{id}', 'Teacher\UserController@show')->name('TeacherUserShow');
//    Route::get('/users/create', 'Teacher\UserController@create')->name('TeacherUserCreate');
//    Route::post('/users/store', 'Teacher\UserController@store')->name('TeacherUserStore');
    Route::get('/users/{id}/edit', 'Teacher\UserController@edit')->name('TeacherUserEdit');
    Route::post('/users/{id}/update', 'Teacher\UserController@update')->name('TeacherUserUpdate');
    Route::get('/users/{id}/destroy', 'Teacher\UserController@destroy')->name('TeacherUserDestroy');

//    Route::get('/admin/users/create', 'Auth\RegisterController@showRegistrationForm')->name('register');
//    Route::post('/admin/users/save', 'Auth\RegisterController@register');

    Route::get('/plannings', 'Teacher\PlanningController@index')->name('TeacherPlanningIndex');
    Route::get('/plannings/{id}', 'Teacher\PlanningController@show')->name('TeacherPlanningShow');
    Route::get('/plannings/create', 'Teacher\PlanningController@create')->name('TeacherPlanningCreate');
    Route::post('/plannings/store', 'Teacher\PlanningController@store')->name('TeacherPlanningStore');
    Route::get('/plannings/{id}/edit', 'Teacher\PlanningController@edit')->name('TeacherPlanningEdit');
    Route::post('/plannings/{id}/update', 'Teacher\PlanningController@update')->name('TeacherPlanningUpdate');
    Route::get('/plannings/{id}/destroy', 'Teacher\PlanningController@destroy')->name('TeacherPlanningDestroy');

});