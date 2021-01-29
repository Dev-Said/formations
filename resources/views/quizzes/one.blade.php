<tr>
    <td>
        {{$quiz->titre}}
    </td>
    <td>
        {{$quiz->modules_id}}
    </td>
    <td>
        <form action="/quizzes/{{ $quiz->id }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Supprimer" name="delete" class="supp">
        </form>
    </td>
    <td>
        <form action="/quizzes/{{ $quiz->id }}/edit" method="get">
            @csrf
            <input type="submit" value="Modifier" name="update" class="modif">
        </form>
    </td>
</tr>