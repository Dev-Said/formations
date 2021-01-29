@extends('home')

@section('list')

<div>

    <table>
        <thead>
            <tr>
                <th>Tire</th>
                <th>Modules_id</th>
                <th>Supprimer</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>

            @each('quizzes.one', $quizzes, 'quiz')

        </tbody>
    </table>
</div>
@endsection