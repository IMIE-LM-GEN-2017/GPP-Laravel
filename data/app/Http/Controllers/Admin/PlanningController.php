<?php

namespace App\Http\Controllers\Admin;

use App\Planning;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PlanningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planningplanning = Planning::all();
        return view('admin.plannings.index', ['planning' => $planning]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.plannings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string',
        ]);

        $data = $request->all();

        $planning = Planning::create($data);

        // Redirection et message
        if ($planning->exists) {
            Session::flash('message', 'Nouveau planning créé');
            return redirect()->route('AdminPlanningIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('AdminPlanningCreate');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planning = Planning::findOrFail($id);

        return view('admin.plannings.show', ['planning' => $planning]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planning = Planning::findOrFail($id);

        return view('admin.plannings.edit', ['planning' => $planning]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id The id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validation des données
        $this->validate($request, [
            'username' => 'required|string',
        ]);
        $planning = Planning::findOrFail($id);

        if ($planning->update($request->all())) {
            Session::flash('message', 'Planning mis à jour');
            return redirect()->route('AdminPlanningIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminPlanningEdit', ['id' => $id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id The Id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $planning = Planning::findOrFail($id);
        $planning->delete();

        Session::flash('message', 'Planning supprimé');

        return redirect()->route('AdminPlanningIndex');
    }
}
