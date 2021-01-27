<div class="myClass" style="display: flex; align-items: center;">
    <h2>{{$user->nom}}</h2>&nbsp;&nbsp;&nbsp;&nbsp;
    <h4>{{$user->prenom}}</h4>&nbsp;&nbsp;&nbsp;&nbsp;
    <h4>{{$user->sexe}}</h4>&nbsp;&nbsp;&nbsp;&nbsp;
    <h4>{{$user->admin}}</h4>&nbsp;&nbsp;&nbsp;&nbsp;
    <h4>{{$user->email}}</h4>&nbsp;&nbsp;&nbsp;&nbsp;
    <form action="/users/{{ $user->id }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Supprimer" name="DELETE">
    </form>
</div>