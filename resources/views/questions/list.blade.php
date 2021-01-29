@extends('home')

@section('list')

<div>

    <table>
        <thead>
            <tr>
                <th>Question</th>
                <th>Num</th>
                <th>Quizzes_id</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @each('questions.one', $questions, 'question')

        </tbody>
    </table>
</div>
@endsection