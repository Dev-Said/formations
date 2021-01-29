@extends('home')

@section('list')

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