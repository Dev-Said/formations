@extends('layouts.default')

@section('content')

<div class="edit">

    <form action="/users/{{ $user->id }}" method="post">
        @csrf
        @method('put')
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="{{ $user->nom }}">
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom" value="{{ $user->prenom }}">
        <label for="sexe">Sexe</label>
        <select name="sexe" id="sexe">
            <option value="{{$user->sexe}}">{{$user->sexe}}</option>
            <option value="{{ $user->sexe === 'Masculin' ? 'Feminin' : 'Masculin' }}">{{ $user->sexe === 'Masculin' ? 'Feminin' : 'Masculin' }}</option>
        </select>
        <label for="admin">Admin</label>
        <select name="admin" id="admin">
            <option value="{{$user->admin}}">{{ $user->admin === 1 ? 'admin' : 'not admin' }}</option>
            <option value="{{ $user->admin === 1 ? 0 : 1 }}">{{ $user->admin === 1 ? 'not admin' : 'admin' }}</option>
        </select>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="{{ $user->password }}">
        <input type="submit">
    </form>

</div>


@endsection
