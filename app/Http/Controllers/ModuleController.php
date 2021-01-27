<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::all();
        return view('modules.list', ['modules' => $modules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $module = new Module;
        $module->titre = $request->has('titre') &&
            strlen($request->titre) ? $request->titre : 'unknown';
        $module->description = $request->has('description') &&
            strlen($request->description) ? $request->description : 'unknown';
        $module->ordre = $request->has('ordre') &&
            strlen($request->ordre) ? $request->ordre : 'unknown';
        $module->formations_id = 1;
        $module->save();

        return redirect('/modules');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        return view('modules.one', ['module' => $module]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        return view('modules.edit', ['module' => $module]);
    }

    /**
     * Update the specified resource in storage.F
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        $module->titre = $request->has('titre') &&
            strlen($request->titre) ? $request->titre : $module->titre;
        $module->description = $request->has('description') &&
            strlen($request->description) ? $request->description : $module->description;
        $module->ordre = $request->has('ordre') &&
            strlen($request->ordre) ? $request->ordre : $module->ordre;
        $module->formations_id = $request->has('formations_id') &&
            strlen($request->formations_id) ? $request->formations_id : $module->formations_id;

        $module->save();

        return redirect('/modules');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return redirect('/modules');
    }
}
