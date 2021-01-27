<div class="myClass" style="display: flex; align-items: center;">
    <h2>{{$quiz->titre}}</h2>&nbsp;&nbsp;&nbsp;&nbsp;
    <h3>{{$quiz->modules_id}}</h3>&nbsp;&nbsp;&nbsp;&nbsp;
    <form action="/quizzes/{{ $quiz->id }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Supprimer" name="DELETE">
    </form>
</div>