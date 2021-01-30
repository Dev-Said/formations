@extends('home')

@section('list')

<h1>Modules</h1>

<div>

    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @each('modules.one', $modules, 'module')

        </tbody>
    </table>
</div>
@endsection