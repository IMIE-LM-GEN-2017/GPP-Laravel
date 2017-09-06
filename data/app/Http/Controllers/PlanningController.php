<?php

namespace App\Http\Controllers;

use App\Planning;

class PlanningController extends Controller
{

    public function index($id)
    {
        $planning = Planning::findOrFail($id);

        return view('plannings.index', ['planning' => $planning]);

    }
}