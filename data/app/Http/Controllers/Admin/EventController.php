<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Event;

class EventController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', ['events' => $events]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);

        return view('admin.events.show', ['event' => $event]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);

        return view('admin.events.edit', ['event' => $event]);
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
            'title' => 'required|string|unique:events',
            'description' => 'required|string|unique:events',
            'start' => 'required|string|unique:events',
            'end' => 'required|string|unique:events',
            'room_id' => 'required|string|unique:events',
        ]);
        $event = Event::findOrFail($id);

        if ($event->update($request->all())) {
            Session::flash('message', 'Evènement mis à jour');
            return redirect()->route('AdminEventIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminEventEdit', ['id' => $id]);
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
        $event = Event::findOrFail($id);
        $event->delete();

        Session::flash('message', 'Evènement supprimé');

        return redirect()->route('AdminEventIndex');
    }

    public function dashboard()
    {
        return view('admin.events.dashboard');
    }

    public function create()
    {
        return view('admin.events.create');
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
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'start' => 'required|string|max:255',
            'end' => 'required|string|max:255',
            'room_id' => 'required|string|max:255',

        ]);

        $data = $request->all();

        $event = Event::create($data);

        // Redirection et message
        if ($event->exists) {
            Session::flash('message', 'Nouvel Evènement créé');
            return redirect()->route('AdminEventIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('AdminEventCreate');
        }
    }
}
