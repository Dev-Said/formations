<div class="myClass" style="display: flex; align-items: center;">
    <h2>{{$question->question}}</h2>&nbsp;&nbsp;&nbsp;&nbsp;
    <h4>{{$question->num}}</h4></h2>&nbsp;&nbsp;&nbsp;&nbsp;
    <h4>{{$question->quizzes_id}}</h4></h2>&nbsp;&nbsp;&nbsp;&nbsp;
    <form action="/questions/{{ $question->id }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Supprimer" name="DELETE">
    </form>
</div>