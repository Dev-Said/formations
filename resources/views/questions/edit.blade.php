@extends('layouts.default')

@section('content')

<div class="edit">

    <form action="/questions/{{ $question->id }}" method="post">
        @csrf
        @method('put')
        <label for="question">Question</label>
        <input type="text" name="question" id="question" value="{{ $question->question }}" required>
        <label for="num">Num</label>
        <input type="number" name="num" id="num" value="{{ $question->num }}" required>
        <label for="quizzes_id">Quizzes_id</label>
        <input type="number" name="quizzes_id" id="quizzes_id" value="{{ $question->quizzes_id }}" required>
        <input type="submit">
    </form>

</div>


@endsection