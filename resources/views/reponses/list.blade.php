@extends('home')

@section('list')

<div>

    <table>
        <thead>
            <tr>
                <th>Text</th>
                <th>Type</th>
                <th>Is_correct</th>
                <th>Questions_id</th>
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