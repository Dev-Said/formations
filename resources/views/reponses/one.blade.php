<div class="myClass" style="display: flex; align-items: center;">
    <h2>{{$reponse->text}}</h2>&nbsp;&nbsp;&nbsp;&nbsp;
    <h4>{{$reponse->type}}</h4>
    <h4>{{$reponse->is_correct}}</h4>
    <h4>{{$reponse->questions_id}}</h4>
    <form action="/reponses/{{ $reponse->id }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Supprimer" name="DELETE">
    </form>
</div>