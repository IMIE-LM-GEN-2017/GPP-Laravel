<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Center;

class CenterController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centers = Center::all();
        return view('admin.centers.index', ['centers' => $centers]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $center = Center::findOrFail($id);

        return view('admin.centers.show', ['center' => $center]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $center = Center::findOrFail($id);

        return view('admin.centers.edit', ['center' => $center]);
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
            'name' => 'required|string|unique:centers',
            'address' => 'required|string|unique:centers',
            'zip' => 'required|string|unique:centers',
            'city' => 'required|string|unique:centers',
        ]);
        $center = Center::findOrFail($id);

        if ($center->update($request->all())) {
            Session::flash('message', 'Centre mis à jour');
            return redirect()->route('AdminCenterIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminCenterEdit', ['id' => $id]);
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
        $center = Center::findOrFail($id);
        $center->delete();

        Session::flash('message', 'Centre supprimé');

        return redirect()->route('AdminCenterIndex');
    }

    public function dashboard()
    {
        return view('admin.centers.dashboard');
    }

    public function create()
    {
        return view('admin.centers.create');
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
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'zip' => 'required|string|max:255',
            'city' => 'required|string|max:255',

        ]);

        $data = $request->all();

        $center = Center::create($data);

        // Redirection et message
        if ($center->exists) {
            Session::flash('message', 'Nouveau Centre créé');
            return redirect()->route('AdminUserIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('AdminCenterCreate');
        }
    }
}
