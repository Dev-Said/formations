<form action="/quizzes/{{ $quiz->id }}" method="post">
@csrf
@method('put')
<input type="text" name="titre" value="{{ $quiz->titre }}">
<input type="number" name="modules_id" value="{{ $quiz->modules_id }}">
<input type="submit">
</form>