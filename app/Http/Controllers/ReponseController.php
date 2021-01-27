<?php

namespace App\Http\Controllers;

use App\Models\Reponse;
use Illuminate\Http\Request;

class ReponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reponses = Reponse::all();
        return view('reponses.list', ['reponses' => $reponses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reponses.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reponse = new Reponse;
        $reponse->type = $request->has('type') &&
            strlen($request->type) ? $request->type : 'unknown';
        $reponse->text = $request->has('text') &&
            strlen($request->text) ? $request->text : 'unknown';
        $reponse->is_correct = $request->has('is_correct') &&
            strlen($request->is_correct) ? $request->is_correct : 'unknown';
        $reponse->questions_id = $request->has('questions_id') &&
            strlen($request->questions_id) ? $request->questions_id : 'unknown';
        $reponse->save();

        return redirect('/reponses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function show(Reponse $reponse)
    {
        return view('reponses.one', ['reponse' => $reponse]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function edit(Reponse $reponse)
    {
        return view('reponses.edit', ['reponse' => $reponse]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reponse $reponse)
    {
        $reponse->type = $request->has('type') &&
            strlen($request->type) ? $request->type : $reponse->type;
        $reponse->text = $request->has('text') &&
            strlen($request->text) ? $request->text : $reponse->text;
        $reponse->is_correct = $request->has('is_correct') &&
            strlen($request->is_correct) ? $request->is_correct : $reponse->is_correct;
        $reponse->questions_id = $request->has('questions_id') &&
            strlen($request->questions_id) ? $request->questions_id : $reponse->questions_id;

        $reponse->save();

        return redirect('/reponses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reponse $reponse)
    {
        $reponse->delete();
        return redirect('/reponses');
    }
}
