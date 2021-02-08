<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\RoleUser;
use App\Models\User;
use App\Models\userFormation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $formations = Formation::all();
        $users = User::all();


        return view('trainingProgram.index', [
            'formations' => $formations,
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inscriptionUser = new UserFormation();
        $inscriptionUser->formation_id = $request->input('idFormation');
        $inscriptionUser->user_id = $request->input('user');
        $inscriptionUser->save();

        return redirect()->route('formationsAvailables')->with('success','L\'utilisateur à bien été inscrit ! ');
    }

    public function show($id)
    {
        $formation = Formation::find($id);

        return view('trainingProgram.show', [
            'formation' => $formation,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function validateOneUser()
    {
        $users = User::all();

        $formations = Formation::where('statutFormation_id', 1)->get();

        return view('trainingProgram.validate', [
            'formations' => $formations,
            'users' => $users
        ]);
    }
}
