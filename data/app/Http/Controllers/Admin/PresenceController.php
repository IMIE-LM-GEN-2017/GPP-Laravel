<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;

class PresenceController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.presences.index', ['users' => $users]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.presences.create');
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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string',
        ]);

        $data = $request->all();

        $user = User::create($data);

        // Redirection et message
        if ($user->exists) {
            Session::flash('message', 'Nouvel utilisateur créée');
            return redirect()->route('AdminPresenceIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('AdminPresenceCreate');
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
        $user = User::findOrFail($id);

        return view('admin.presences.show', ['user' => $user]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.presences.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validation des données
        $this->validate($request, [
            'username' => 'required|username|unique:users',
            'first_name' => 'required|first_name',
            'last_name' => 'required|last_name',
            'email' => 'required|string',

        ]);
        $user = User::findOrFail($id);

        if ($user->update($request->all())) {
            Session::flash('message', 'Utilisateur mis à jour');
            return redirect()->route('AdminUserIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminUserEdit', ['id' => $id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        Session::flash('message', 'Utilisateur supprimé');

        return redirect()->route('AdminPresenceIndex');
    }
}
