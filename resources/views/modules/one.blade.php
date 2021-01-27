<div class="myClass" style="display: flex; align-items: center;">
    <h2>{{$module->titre}}</h2>&nbsp;&nbsp;&nbsp;&nbsp;
    <h4>{{$module->description}}</h4>
    <form action="/modules/{{ $module->id }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Supprimer" name="DELETE">
    </form>
</div>