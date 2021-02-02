@extends('layouts.default')

@section('content')

<div class="edit">
<h2>Ajouter un quiz</h2>
    <form action="/quizzes" method="post">
        @csrf

        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre" required>
        <label for="modules_id">Modules_id</label>
        <input type="number" name="modules_id" id="modules_id" required>
        <input type="submit">
    </form>

</div>


@endsection