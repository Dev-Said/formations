@extends('layouts.default')

@section('content')

<div class="edit">

    <form action="/questions/{{ $question->id }}" method="post">
        @csrf
        @method('put')
        <label for="titre">Question</label>
        <input type="text" name="question" id="question" value="{{ $question->question }}">
        <label for="titre">Num</label>
        <input type="number" name="num" id="num" value="{{ $question->num }}">
        <label for="titre">Quizzes_id</label>
        <input type="number" name="quizzes_id" id="quizzes_id" value="{{ $question->quizzes_id }}">
        <input type="submit">
    </form>

</div>


@endsection