<form action="/quizzes" method="post">
@csrf
<input type="text" name="titre">
<input type="number" name="modules_id">
<input type="submit">
</form>