@extends('home')

@section('list')

<h1>Réponses</h1>

<div>

    <table>
        <thead>
            <tr>
                <th>Text</th>
                <th>Type</th>
                <th>Is_correct</th>
                <th>Question_id</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @each('reponses.one', $reponses, 'reponse')

        </tbody>
    </table>
</div>
@endsection