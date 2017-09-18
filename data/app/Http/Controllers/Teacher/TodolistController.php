<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TodolistController extends TeacherController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todolists = Todolist::all();
        return view('teacher.todolists.index', ['todolists' => $todolists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tasks = Task::all()->pluck('name', 'descirption', 'id');

        return view('teacher.todolists.create',
            [
                'tasks' => $tasks
            ]);
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
            'name' => 'required|string'
        ]);


        $data = $request->all();
//        var_dump($data);
//        die;
        if (isset($data['tasks'])) {
            $tasks = $data['tasks'];
        } else {
            $tasks = [];
        }

        $data['user_id'] = auth()->user()->id;

        $todolist = Todolist::create($data);

        // Redirection et message
        if ($todolist->exists) {
            if (count($tasks) > 0) {
                $todolist->tasks()->attach($tasks);
            }
            Session::flash('message', 'Nouvelle tâche créée');
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
        $todolists = Todolist::findOrFail($id);

        return view('teacher.todolists.show', ['todolists' => $todolists]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todolist = Todolist::findOrFail($id);

        return view('teacher.todolists.edit', ['todolists' => $todolist]);
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
            'name' => 'required|string',
                    ]);
        $todolist = Todolist::findOrFail($id);

        if ($todolist->update($request->all())) {
            Session::flash('message', 'Liste des tâches mise à jour');
            return redirect()->route('AdminTodolistIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminTodolistEdit', ['id' => $id]);
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
        $todolist = Todolist::findOrFail($id);
        $todolist->delete();

        Session::flash('message', 'Post supprimé');

        return redirect()->route('AdminTodolistIndex');
    }
}