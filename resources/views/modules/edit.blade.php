<form action="/modules/{{ $module->id }}" method="post">
@csrf
@method('put')
<input type="text" name="titre" value="{{ $module->titre }}">
<input type="text" name="description" value="{{ $module->description }}">
<input type="number" name="ordre" value="{{ $module->ordre }}">
<input type="hidden" name="questions_id" value="{{ $module->questions_id }}">
<input type="submit">
</form>