@extends('layouts.default')

@section('content')

<div class="edit">
<h2>Ajouter un quiz</h2>
    <form action="/quizzes" method="post">
        @csrf

        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre" required>

        <label for="module_id">Liste des modules qui n'ont pas de quiz</label>
        <select name="module_id" id="module_id" required>
            <option value=""></option>
            @foreach($modules as $module)
            <option value="{{ $module->id }}">{{ $module->titre }}</option>
            @endforeach
        </select>

        <input type="submit">
    </form>

</div>


@endsection