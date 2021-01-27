<form action="/questions" method="post">
@csrf
<input type="text" name="question">
<input type="number" name="num">
<input type="number" name="quizzes_id">
<input type="submit">
</form>