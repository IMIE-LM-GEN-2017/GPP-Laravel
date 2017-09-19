<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use APP\Lesson;

class LessonController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::all();
        return view('admin.lessons.index', ['lessons' => $lessons]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lesson = Lesson::findOrFail($id);

        return view('admin.lessons.show', ['lesson' => $lesson]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = Lesson::findOrFail($id);

        return view('admin.lessons.edit', ['lesson' => $lesson]);
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
            'start_time' => 'required|datetime|unique:lessons',
            'end_time' => 'required|datetime|unique:lessons',
            'note' => 'required|string|unique:lessons',
            'user_id' => 'required|string|unique:lessons',
            'promotion_id' => 'required|string|unique:lessons',
            'room_id' => 'required|string|unique:lessons',
            'skill_id' => 'required|string|unique:lessons',
        ]);
        $lesson = Lesson::findOrFail($id);

        if ($lesson->update($request->all())) {
            Session::flash('message', 'Cours mis à jour');
            return redirect()->route('AdminLessonIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminLessonEdit', ['id' => $id]);
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
        $lesson = Lesson::findOrFail($id);
        $lesson->delete();

        Session::flash('message', 'Cours supprimé');

        return redirect()->route('AdminLessonIndex');
    }

    public function dashboard()
    {
        return view('admin.lessons.dashboard');
    }

    public function create()
    {
        return view('admin.lessons.create');
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
            'start_time' => 'required|datetime|max:255',
            'end_time' => 'required|datetime|max:255',
            'note' => 'required|string|max:255',
            'user_id' => 'required|string|max:255',
            'promotion_id' => 'required|string|max:255',
            'room_id' => 'required|string|max:255',

        ]);

        $data = $request->all();

        $lesson = Lesson::create($data);

        // Redirection et message
        if ($lesson->exists) {
            Session::flash('message', 'Nouveau Cours créé');
            return redirect()->route('AdminLessonIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('AdminLessonCreate');
        }
    }
}
