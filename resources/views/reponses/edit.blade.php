@extends('layouts.default')

@section('content')

<div class="edit">

    <form action="/reponses/{{ $reponse->id }}" method="post">
        @csrf
        @method('put')

        <label for="type">Type de réponse</label>
        <select name="type" id="type">
            <option value="{{$reponse->type}}">{{$reponse->type}}</option>
            <option value="{{ $reponse->type === 'checkbox' ? 'radio' : 'checkbox' }}">{{ $reponse->type === 'checkbox' ? 'radio' : 'checkbox' }}</option>
        </select>
        <label for="type">Text</label>
        <input type="text" name="text" id="text" value="{{ $reponse->text }}">
        <label for="type">Is_correct</label>
        <select name="is_correct" id="is_correct">
            <option value="{{$reponse->is_correct}}">{{$reponse->is_correct}}</option>
            <option value="{{ $reponse->is_correct === 1 ? 0 : 1 }}">{{ $reponse->is_correct === 1 ? 0 : 1 }}</option>
        </select>
        <label for="questions_id">Questions_id</label>
        <input type="number" name="questions_id" id="questions_id" value="{{ $reponse->questions_id }}">
        <input type="submit">
    </form>

</div>


@endsection