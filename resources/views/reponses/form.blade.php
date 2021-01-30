@extends('layouts.default')

@section('content')

<div class="edit">

    <form action="/reponses" method="post">
        @csrf

        <label for="type">Type de réponse</label>
        <select name="type" id="type" required>
            <option value="">--Type de réponse--</option>
            <option value="checkbox">checkbox</option>
            <option value="radio">radio</option>
        </select>
        <label for="text">Text</label>
        <input type="text" name="text" id="text" required>
        <label for="is_correct">Is_correct</label>
        <select name="is_correct" id="is_correct" required>
            <option value="">--Indiquez si la réponse est correcte--</option>
            <option value="1">correct</option>
            <option value="ra0dio">not correct</option>
        </select>
        <label for="questions_id">Questions_id</label>
        <input type="number" name="questions_id" id="questions_id" required>
        <input type="submit">
    </form>

</div>


@endsection