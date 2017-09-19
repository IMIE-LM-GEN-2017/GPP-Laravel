<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('admin.rooms.index', ['rooms' => $rooms]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rooms.create');
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
            'nb_seats' => 'required|int',
            'center_id' => 'required|string',

        ]);

        $data = $request->all();

        $room = Room::create($data);

        // Redirection et message
        if ($room->exists) {
            Session::flash('message', 'Nouvelle Salle créée');
            return redirect()->route('AdminRoomIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('AdminRoomCreate');
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
        $room = Room::findOrFail($id);

        return view('admin.rooms.show', ['room' => $room]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::findOrFail($id);

        return view('admin.rooms.edit', ['room' => $room]);
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
            'name' => 'required|string|unique:rooms',
            'nb_seats' => 'required|int|unique:rooms',
            'center_id' => 'required|string|unique:rooms',


        ]);
        $room = Room::findOrFail($id);

        if ($room->update($request->all())) {
            Session::flash('message', 'Classe mise à jour');
            return redirect()->route('AdminRoomIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminRoomEdit', ['id' => $id]);
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
        $room = Room::findOrFail($id);
        $room->delete();

        Session::flash('message', 'Salle supprimée');

        return redirect()->route('AdminRoomIndex');
    }
}
