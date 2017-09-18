<?php

namespace App\Http\Controllers\Teacher;

class DashboardController extends TeacherController
{
    public function index()
    {
        return view('teacher.dashboard.index');
    }
}