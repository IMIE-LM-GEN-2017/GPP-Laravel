<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller as DefaultController;

class TeacherController extends DefaultController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

}