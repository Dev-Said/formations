@extends('home')

@section('list')

<h1>Questions</h1>

<div>

    <table>
        <thead>
            <tr>
                <th>Num du model</th>
                <th>Action</th>
                <th>User_id</th>
                <th>Model_id</th>
                <th>Timestamp</th>
            </tr>
        </thead>
        <tbody>

            @each('remembers.one', $remembers, 'remember')

        </tbody>
    </table>
</div>
@endsection