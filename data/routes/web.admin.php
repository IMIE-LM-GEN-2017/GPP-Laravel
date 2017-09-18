<?php
// Admin
Route::group(['prefix' => 'admin', 'middleware' => 'can:access-admin'], function () {

    Route::get('/', 'Admin\DashboardController@index')->name('AdminDashboard');

    Route::get('/centers', 'Admin\CenterController@index')->name('AdminCenterIndex');
    Route::get('/centers/{id}', 'Admin\CenterController@show')->name('AdminCenterShow');
    Route::get('/centers/create', 'Admin\CenterController@create')->name('AdminCenterCreate');
    Route::get('/centers/store', 'Admin\CenterController@store')->name('AdminCenterStore');
    Route::get('/centers/edit/{id}', 'Admin\CenterController@edit')->name('AdminCenterEdit');
    Route::get('/centers/update/{id}', 'Admin\CenterController@update')->name('AdminCenterUpdate');
    Route::get('/centers/destroy', 'Admin\CenterController@destroy')->name('AdminCenterDestroy');

    Route::get('/planning', 'Admin\PlanningController@index')->name('AdminPlanningIndex');
    Route::get('/planning/{id}', 'Admin\PlanningController@show')->name('AdminPlanningShow');
    Route::get('/planning/create', 'Admin\PlanningController@create')->name('AdminPlanningCreate');
    Route::get('/planning/store', 'Admin\PlanningController@store')->name('AdminPlanningStore');
    Route::get('/planning/edit/{id}', 'Admin\PlanningController@edit')->name('AdminPlanningEdit');
    Route::get('/planning/update/{id}', 'Admin\PlanningController@update')->name('AdminPlanningUpdate');
    Route::get('/planning/destroy', 'Admin\PlanningController@destroy')->name('AdminPlanningDestroy');

    Route::get('/lessons', 'Admin\LessonController@index')->name('AdminLessonIndex');
    Route::get('/lessons/{id}', 'Admin\LessonController@show')->name('AdminLessonShow');
    Route::get('/lessons/create', 'Admin\LessonController@create')->name('AdminLessonCreate');
    Route::get('/lessons/store', 'Admin\LessonController@store')->name('AdminLessonStore');
    Route::get('/lessons/edit/{id}', 'Admin\LessonController@edit')->name('AdminLessonEdit');
    Route::get('/lessons/update/{id}', 'Admin\LessonController@update')->name('AdminLessonUpdate');
    Route::get('/lessons/destroy', 'Admin\LessonController@destroy')->name('AdminLessonDestroy');

    Route::get('/presences', 'Admin\PresenceController@index')->name('AdminPresenceIndex');
    Route::get('/presences/{id}', 'Admin\PresenceController@show')->name('AdminPresenceShow');
    Route::get('/presences/create', 'Admin\PresenceController@create')->name('AdminPresenceCreate');
    Route::get('/presences/store', 'Admin\PresenceController@store')->name('AdminPresenceStore');
    Route::get('/presences/edit/{id}', 'Admin\PresenceController@edit')->name('AdminPresenceEdit');
    Route::get('/presences/update/{id}', 'Admin\PresenceController@update')->name('AdminPresenceUpdate');
    Route::get('/presences/destroy', 'Admin\PresenceController@destroy')->name('AdminPresenceDestroy');

    Route::get('/promotions', 'Admin\PromotionController@index')->name('AdminPromotionIndex');
    Route::get('/promotions/{id}', 'Admin\PromotionController@show')->name('AdminPromotionShow');
    Route::get('/promotions/create', 'Admin\PromotionController@create')->name('AdminPromotionCreate');
    Route::get('/promotions/store', 'Admin\PromotionController@store')->name('AdminPromotionStore');
    Route::get('/promotions/edit/{id}', 'Admin\PromotionController@edit')->name('AdminPromotionEdit');
    Route::get('/promotions/update/{id}', 'Admin\PromotionController@update')->name('AdminPromotionUpdate');
    Route::get('/promotions/destroy', 'Admin\PromotionController@destroy')->name('AdminPromotionDestroy');

    Route::get('/rooms', 'Admin\RoomController@index')->name('AdminRoomIndex');
    Route::get('/rooms/{id}', 'Admin\RoomController@show')->name('AdminRoomShow');
    Route::get('/rooms/create', 'Admin\RoomController@create')->name('AdminRoomCreate');
    Route::get('/rooms/store', 'Admin\RoomController@store')->name('AdminRoomStore');
    Route::get('/rooms/edit/{id}', 'Admin\RoomController@edit')->name('AdminRoomEdit');
    Route::get('/rooms/update/{id}', 'Admin\RoomController@update')->name('AdminRoomUpdate');
    Route::get('/rooms/destroy', 'Admin\RoomController@destroy')->name('AdminRoomDestroy');

    Route::get('/skills', 'Admin\SkillController@index')->name('AdminSkillIndex');
    Route::get('/skills/{id}', 'Admin\SkillController@show')->name('AdminSkillShow');
    Route::get('/skills/create', 'Admin\SkillController@create')->name('AdminSkillCreate');
    Route::get('/skills/store', 'Admin\SkillController@store')->name('AdminSkillStore');
    Route::get('/skills/edit/{id}', 'Admin\SkillController@edit')->name('AdminSkillEdit');
    Route::get('/skills/update/{id}', 'Admin\SkillController@update')->name('AdminSkillUpdate');
    Route::get('/skills/destroy', 'Admin\SkillController@destroy')->name('AdminSkillDestroy');

    Route::get('/tasks', 'Admin\TaskController@index')->name('AdminTaskIndex');
    Route::get('/tasks/{id}', 'Admin\TaskController@show')->name('AdminTaskShow');
    Route::get('/tasks/create', 'Admin\TaskController@create')->name('AdminTaskCreate');
    Route::get('/tasks/store', 'Admin\TaskController@store')->name('AdminTaskStore');
    Route::get('/tasks/edit/{id}', 'Admin\TaskController@edit')->name('AdminTaskEdit');
    Route::get('/tasks/update/{id}', 'Admin\TaskController@update')->name('AdminTaskUpdate');
    Route::get('/tasks/destroy', 'Admin\TaskController@destroy')->name('AdminTaskDestroy');

    Route::get('/todolists', 'Admin\TodolistController@index')->name('AdminTodolistIndex');
    Route::get('/todolists/{id}', 'Admin\TodolistController@show')->name('AdminTodolistShow');
    Route::get('/todolists/create', 'Admin\TodolistController@create')->name('AdminTodolistCreate');
    Route::get('/todolists/store', 'Admin\TodolistController@store')->name('AdminTodolistStore');
    Route::get('/todolists/edit/{id}', 'Admin\TodolistController@edit')->name('AdminTodolistEdit');
    Route::get('/todolists/update/{id}', 'Admin\TodolistController@update')->name('AdminTodolistUpdate');
    Route::get('/todolists/destroy', 'Admin\TodolistController@destroy')->name('AdminTodolistDestroy');

    Route::get('/users', 'Admin\UserController@index')->name('AdminUserIndex');
    Route::get('/users/{id}', 'Admin\UserController@show')->name('AdminUserShow');
    Route::get('/users/create', 'Admin\UserController@create')->name('AdminUserCreate');
    Route::get('/users/store', 'Admin\UserController@store')->name('AdminUserStore');
    Route::get('/users/edit/{id}', 'Admin\UserController@edit')->name('AdminUserEdit');
    Route::get('/users/update/{id}', 'Admin\UserController@update')->name('AdminUserUpdate');
    Route::get('/users/destroy', 'Admin\UserController@destroy')->name('AdminUserDestroy');
    
});