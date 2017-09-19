<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TodolistController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todolists = Todolist::all();
        return view('admin.todolists.index', ['todolists' => $todolists]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.todolists.create');
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
            'name' => 'required|string',
            'user_id' => 'required|string',

        ]);

        $data = $request->all();

        $todolist = Todolist::create($data);

        // Redirection et message
        if ($todolist->exists) {
            Session::flash('message', 'Nouvelle Todolist créée');
            return redirect()->route('AdminTodolistIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('AdminTodolistCreate');
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
        $todolist = Todolist::findOrFail($id);

        return view('admin.todolists.show', ['todolist' => $todolist]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todolist = Todolist::findOrFail($id);

        return view('admin.todolists.edit', ['todolist' => $todolist]);
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
            'name' => 'required|string|unique:todolists',
            'user_id' => 'required|string|unique:todolists',

        ]);
        $todolist = Todolist::findOrFail($id);

        if ($todolist->update($request->all())) {
            Session::flash('message', 'Todolists mise à jour');
            return redirect()->route('AdminTodolistIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminTodolistEdit', ['id' => $id]);
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
        $todolist = Todolist::findOrFail($id);
        $todolist->delete();

        Session::flash('message', 'Todolist supprimée');

        return redirect()->route('AdminTodolistIndex');
    }
}