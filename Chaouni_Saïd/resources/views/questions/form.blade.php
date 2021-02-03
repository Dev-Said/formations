@extends('layouts.default')

@section('content')

<div class="edit">
<h2>Ajouter une question</h2>
    <form action="/questions" method="post">
        @csrf

        <label for="question">Question</label>
        <input type="text" name="question" id="question" required>

        <input type="hidden" name="num" id="num" value="{{ $questionsCount }}">

        <label for="quiz_id">Sélectionnez un quiz</label>
        <select name="quiz_id" id="quiz_id" required>
            <option value=""></option>
            @foreach($quizzes as $quiz)
            <option value="{{ $quiz->id }}">{{ $quiz->titre }}</option>
            @endforeach
        </select>

        <input type="submit">
    </form>

</div>


@endsection