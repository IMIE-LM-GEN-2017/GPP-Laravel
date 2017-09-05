<?php

namespace App\Http\Controllers;

use App\Planning;

class PlanningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plannings = Planning::all();
        return view('plannings.index', ['plannings' => $plannings]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id The Id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planning = Planning::findOrFail($id);

        return view('plannings.show', ['planning' => $planning]);

    }
}