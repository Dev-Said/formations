<tr>
    <td>
        {{$module->titre}}
    </td>
    <td>
        {{$module->description}}
    </td>
    <td>
        <form action="/modules/{{ $module->id }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Supprimer" name="delete" class="supp">
        </form>
    </td>
    <td>
        <form action="/modules/{{ $module->id }}/edit" method="get">
            @csrf
            <input type="submit" value="Modifier" name="update" class="modif">
        </form>
    </td>
</tr>