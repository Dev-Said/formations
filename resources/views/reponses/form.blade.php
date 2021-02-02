@extends('layouts.default')

@section('content')

<div class="edit">
<h2>Ajouter une réponse</h2>
    <form action="/reponses" method="post">
        @csrf

        <label for="question_id">Chousissez une question</label>
        <select name="question_id" id="question_id" required>
            <option value=""></option>
            @foreach($questions as $question)
            <option value="{{ $question->id }}">{{ $question->question }}</option>
            @endforeach
        </select>
        <label for="text">Indiquez une réponse</label>
        <input type="text" name="text" id="text" required>
        <label for="type">Type de réponse</label>
        <select name="type" id="type" required>
            <option value=""></option>
            <option value="checkbox">Choix multiple</option>
            <option value="radio">Choix unique</option>
        </select>
        <label for="is_correct">Indiquez si la réponse est correcte</label>
        <select name="is_correct" id="is_correct" required>
            <option value=""></option>
            <option value="1">correct</option>
            <option value="0">not correct</option>
        </select>
        <input type="submit">
    </form>

</div>


@endsection