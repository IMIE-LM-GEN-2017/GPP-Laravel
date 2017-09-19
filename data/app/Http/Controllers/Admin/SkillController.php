<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Skill;

class SkillController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();
        return view('admin.skills.index', ['skills' => $skills]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skills.create');
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

        ]);

        $data = $request->all();

        $skill = Skill::create($data);

        // Redirection et message
        if ($skill->exists) {
            Session::flash('message', 'Nouvelle Compétence créée');
            return redirect()->route('AdminSkillIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('AdminSkillCreate');
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
        $skill = Skill::findOrFail($id);

        return view('admin.skills.show', ['skill' => $skill]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = Skill::findOrFail($id);

        return view('admin.skills.edit', ['skill' => $skill]);
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
            'name' => 'required|string|unique:skills',
            'description' => 'required|string|unique:skills',


        ]);
        $skill = Skill::findOrFail($id);

        if ($skill->update($request->all())) {
            Session::flash('message', 'Compétences mise à jour');
            return redirect()->route('AdminSkillIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminSkillEdit', ['id' => $id]);
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
        $skill = Skill::findOrFail($id);
        $skill->delete();

        Session::flash('message', 'Compétence supprimée');

        return redirect()->route('AdminSkillIndex');
    }
}
