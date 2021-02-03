<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\Remember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('questions.list', ['questions' => $questions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$questionsCount sert à définir l'ordre des questions dans le quiz. Il pourra être modifié
        $questionsCount = Question::all()->max('num') + 1;
        $quizzes = Quiz::all();
        return view('questions.form', ['questionsCount' => $questionsCount, 'quizzes' => $quizzes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = new Question;
        $question->question = $request->has('question') &&
            strlen($request->question) ? $request->question : 'unknown';
        $question->num = $request->has('num') &&
            strlen($request->num) ? $request->num : 'unknown';
        $question->quiz_id = $request->has('quiz_id') &&
            strlen($request->quiz_id) ? $request->quiz_id : 'unknown';
        $question->save();

        $auth = Auth::user();
        $remember = new Remember;
        $remember->model = 'Question';
        $remember->action = 'store';
        $remember->user_id = $auth->id;
        $remember->model_id = $question->id;
        $remember->save();

        return redirect('/questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        return view('questions.one', ['question' => $question]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('questions.edit', ['question' => $question]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $question->question = $request->has('question') &&
            strlen($request->question) ? $request->question : $question->question;
        $question->num = $request->has('num') &&
            strlen($request->num) ? $request->num : $question->num;
        $question->quiz_id = $request->has('quiz_id') &&
            strlen($request->quiz_id) ? $request->quiz_id : $question->quiz_id;

        $question->save();

        $auth = Auth::user();
        $remember = new Remember;
        $remember->model = 'Question';
        $remember->action = 'update';
        $remember->user_id = $auth->id;
        $remember->model_id = $question->id;
        $remember->save();

        return redirect('/questions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();

        $auth = Auth::user();
        $remember = new Remember;
        $remember->model = 'Question';
        $remember->action = 'delete';
        $remember->user_id = $auth->id;
        $remember->model_id = $question->id;
        $remember->save();

        return redirect('/questions');
    }
}
