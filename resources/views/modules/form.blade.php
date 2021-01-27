<form action="/modules" method="post">
@csrf
<input type="text" name="titre">
<input type="text" name="description">
<input type="number" name="ordre">
<input type="hidden" name="formation_id">
<input type="submit">
</form>