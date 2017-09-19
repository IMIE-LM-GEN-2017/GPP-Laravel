<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Promotion;

class PromotionController extends TeacherController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = Promotion::all();
        return view('teacher.promotions.index', ['promotions' => $promotions]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.promotions.create');
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
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'center_id' => 'required|string',

        ]);

        $data = $request->all();

        $promotion = Promotion::create($data);

        // Redirection et message
        if ($promotion->exists) {
            Session::flash('message', 'Nouvelle Promotion créée');
            return redirect()->route('TeacherPromotionIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('TeacherPromotionCreate');
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
        $promotion = Promotion::findOrFail($id);

        return view('teacher.promotions.show', ['promotion' => $promotion]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promotion = Promotion::findOrFail($id);

        return view('teacher.promotions.edit', ['promotion' => $promotion]);
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
            'name' => 'required|string|unique:promotions',
            'description' => 'required|string|unique:promotions',
            'start_date' => 'required|string|unique:promotions',
            'end_date' => 'required|string|unique:promotions',
            'center_id' => 'required|string|unique:promotions',


        ]);
        $promotion = Promotion::findOrFail($id);

        if ($promotion->update($request->all())) {
            Session::flash('message', 'Promotion mise à jour');
            return redirect()->route('TeacherPromotionIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('TeacherPromotionEdit', ['id' => $id]);
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
        $promotion = Promotion::findOrFail($id);
        $promotion->delete();

        Session::flash('message', 'Promotion supprimée');

        return redirect()->route('TeacherPromotionIndex');
    }
}
