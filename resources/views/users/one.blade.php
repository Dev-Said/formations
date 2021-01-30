<tr>
    <td>
        {{$user->nom}}
    </td>
    <td>
        {{$user->prenom}}
    </td>
    <td>
        {{$user->sexe}}
    </td>
    <td>
        {{$user->admin}}
    </td>
    <td>
        {{$user->email}}
    </td>
    <td>
        <form action="/users/{{ $user->id }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Supprimer" name="delete" class="supp">
        </form>
    </td>
    <td>
        <form action="/users/{{ $user->id }}/edit" method="get">
            @csrf
            <input type="submit" value="Modifier" name="update" class="modif">
        </form>
    </td>
    @foreach($user->quizzes as $quiz)
    <td>{{ $quiz->titre }}</td>
    @endforeach
</tr>