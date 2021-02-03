<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reponse;
use App\Models\Question;
use App\Models\Remember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $questions = Question::all();
        return view('reponses.form', ['questions' => $questions]);
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
        $reponse->reponse = $request->has('reponse') &&
            strlen($request->reponse) ? $request->reponse : 'unknown';
        $reponse->is_correct = $request->has('is_correct') &&
            strlen($request->is_correct) ? $request->is_correct : 'unknown';
        $reponse->question_id = $request->has('question_id') &&
            strlen($request->question_id) ? $request->question_id : 'unknown';
        $reponse->save();

        $auth = Auth::user();
        $remember = new Remember;
        $remember->model = 'Reponse';
        $remember->action = 'store';
        $remember->user_id = $auth->id;
        $remember->model_id = $reponse->id;
        $remember->save();

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
        $reponse->reponse = $request->has('reponse') &&
            strlen($request->reponse) ? $request->reponse : $reponse->reponse;
        $reponse->is_correct = $request->has('is_correct') &&
            strlen($request->is_correct) ? $request->is_correct : $reponse->is_correct;
        $reponse->question_id = $request->has('question_id') &&
            strlen($request->question_id) ? $request->question_id : $reponse->question_id;

        $reponse->save();

        $auth = Auth::user();
        $remember = new Remember;
        $remember->model = 'Reponse';
        $remember->action = 'update';
        $remember->user_id = $auth->id;
        $remember->model_id = $reponse->id;
        $remember->save();

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

        $auth = Auth::user();
        $remember = new Remember;
        $remember->model = 'Reponse';
        $remember->action = 'delete';
        $remember->user_id = $auth->id;
        $remember->model_id = $reponse->id;
        $remember->save();

        return redirect('/reponses');
    }


}
