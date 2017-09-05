<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as DefaultController;

class Controller extends DefaultController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

}