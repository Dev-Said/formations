@extends('layouts.default')

@section('content')


<div class="edit">

    <h1>{{ $quiz->titre }}</h1>

    <form action="/reponses_user" method="post">
        @csrf

        @foreach($quiz->questions as $question)
        <h3>{{ $question->question }}</h3>
        @foreach($question->reponses as $reponse)
        <div class="formQuiz">
            <!-- permet d'ajouter un chiffre différent à la fin du name pour différencier les checkbox
            et permettre d'envoyer plusieurs réponses pour une même question -->
            <div style="display: none;">{{ $name = $reponse->type == 'radio' ? '' : '_' . $loop->index }}</div>

            <input type="{{ $reponse->type }}" name="{{ $reponse->question_id . $name }}" 
            id="{{ $reponse->id }}" value="{{ $reponse->id }}">
            <label for="{{ $reponse->id }}">{{ $reponse->reponse }}</label>
            
        </div>
        @endforeach

        @endforeach
        <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">
        <input type="submit">
    </form>

</div>


@endsection