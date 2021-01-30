@extends('layouts.default')

@section('content')

<div class="edit">

    <form action="/questions" method="post">
        @csrf

        <label for="question">Question</label>
        <input type="text" name="question" id="question" required>
        <label for="num">Num</label>
        <input type="number" name="num" id="num" required>
        <label for="quizzes_id">Quizzes_id</label>
        <input type="number" name="quizzes_id" id="quizzes_id" required>
        <input type="submit">
    </form>

</div>


@endsection