<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('admin.tasks.index', ['tasks' => $tasks]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tasks.create');
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
            'description' => 'required|string',
            'status' => 'required|int',
            'start_date' => 'required|datetime',
            'due_date' => 'required|datetime',
            'end_time' => 'required|datetime',
            'todolist_id' => 'required|string',

        ]);

        $data = $request->all();

        $task = Task::create($data);

        // Redirection et message
        if ($task->exists) {
            Session::flash('message', 'Nouvelle Tâche créée');
            return redirect()->route('AdminTaskIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('AdminTaskCreate');
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
        $task = Task::findOrFail($id);

        return view('admin.tasks.show', ['task' => $task]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);

        return view('admin.tasks.edit', ['task' => $task]);
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
            'name' => 'required|string|unique:tasks',
            'description' => 'required|string|unique:tasks',
            'status' => 'required|int|unique:tasks',
            'start_date' => 'required|datetime|unique:tasks',
            'due_date' => 'required|datetime|unique:tasks',
            'end_time' => 'required|datetime|unique:tasks',
            'todolist_id' => 'required|string|unique:tasks',


        ]);
        $task = Task::findOrFail($id);

        if ($task->update($request->all())) {
            Session::flash('message', 'Tâches mise à jour');
            return redirect()->route('AdminTaskIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminTaskEdit', ['id' => $id]);
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
        $task = Task::findOrFail($id);
        $task->delete();

        Session::flash('message', 'Tâche supprimée');

        return redirect()->route('AdminTaskIndex');
    }
}
