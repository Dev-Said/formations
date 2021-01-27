<form action="/users/{{ $user->id }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="nom" value="{{ $user->nom }}">
    <input type="text" name="prenom" value="{{ $user->prenom }}">
    <select name="sexe" id="sexe">
        <option value="{{$user->sexe}}">{{$user->sexe}}</option>
        <option value="{{ $user->sexe === 'masculin' ? 'feminin' : 'masculin' }}">{{ $user->sexe === 'masculin' ? 'feminin' : 'masculin' }}</option>
    </select>
    <select name="admin" id="admin">
        <option value="{{$user->admin}}">{{$user->admin}}</option>
        <option value="{{ $user->admin === 1 ? 0 : 1 }}">{{ $user->admin === 1 ? 0 : 1 }}</option>
    </select>
    <input type="email" name="email" value="{{ $user->email }}">
    <input type="password" name="password" value="{{ $user->password }}">
    <input type="submit">
</form>