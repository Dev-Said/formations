@extends('home')

@section('list')

<h1>Quiz</h1>

<div>

    <table>
        <thead>
            <tr>
                <th>Tire</th>
                <th>Module_id</th>
                <th></th>
                <th></th>
                <th></th>
                <th>Participants</th>
            </tr>
        </thead>
        <tbody>

            @each('quizzes.one', $quizzes, 'quiz')

        </tbody>
    </table>
</div>
@endsection