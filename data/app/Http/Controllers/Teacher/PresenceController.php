<?php

namespace App\Http\Controllers\Teacher;

use App\Presence;
use Illuminate\Http\Request;
use App\User;

class PresenceController extends TeacherController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presences = Presence::all();
        return view('teacher.presences.index', ['presences' => $presences]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.presences.create');
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
            'is_present' => 'required|int',
            'excuse' => 'required|string',
            'lesson_id' => 'required|string',
            'user_id' => 'required|string',
        ]);

        $data = $request->all();

        $presence = Presence::create($data);

        // Redirection et message
        if ($presence->exists) {
            Session::flash('message', 'Nouvelle Présence créée');
            return redirect()->route('TeacherPresenceIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('TeacherPresenceCreate');
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
        $presence = Presence::findOrFail($id);

        return view('teacher.presences.show', ['presence' => $presence]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $presence = Presence::findOrFail($id);

        return view('teacher.presences.edit', ['presence' => $presence]);
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
            'is_present' => 'required|int|unique:presences',
            'excuse' => 'required|string|unique:presences',
            'lesson_id' => 'required|string|unique:presences',
            'user_id' => 'required|string|unique:presences',

        ]);
        $presence = Presence::findOrFail($id);

        if ($presence->update($request->all())) {
            Session::flash('message', 'Présence mise à jour');
            return redirect()->route('TeacherPresenceIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('TeacherPresenceEdit', ['id' => $id]);
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
        $presence = Presence::findOrFail($id);
        $presence->delete();

        Session::flash('message', 'Présence supprimée');

        return redirect()->route('TeacherPresenceIndex');
    }
}
