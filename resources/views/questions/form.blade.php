@extends('layouts.default')

@section('content')

<div class="edit">
<h2>Ajouter une question</h2>
    <form action="/questions" method="post">
        @csrf

        <label for="question">Question</label>
        <input type="text" name="question" id="question" required>
        <label for="num">Num</label>
        <input type="number" name="num" id="num" required>
        <label for="quiz_id">Quiz_id</label>
        <input type="number" name="quiz_id" id="quiz_id" required>
        <input type="submit">
    </form>

</div>


@endsection