<form action="/questions/{{ $question->id }}" method="post">
@csrf
@method('put')
<input type="text" name="question" value="{{ $question->question }}">
<input type="number" name="num" value="{{ $question->num }}">
<input type="number" name="quizzes_id" value="{{ $question->quizzes_id }}">
<input type="submit">
</form>