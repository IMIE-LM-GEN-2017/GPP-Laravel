<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;

class UserController extends TeacherController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('teacher.users.index', ['users' => $users]);
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

        return view('teacher.users.show', ['user' => $user]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('teacher.users.edit', ['user' => $user]);
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
            'email' => 'required|email|unique:users',
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
     * @param  int $id The Id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        Session::flash('message', 'Utilisateur supprimé');

        return redirect()->route('AdminUserIndex');
    }

    public function dashboard()
    {
        return view('teacher.users.dashboard');
    }
}
