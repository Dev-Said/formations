<form action="/reponses" method="post">
    @csrf
    <select name="type" id="type">
        <option value="">--Type de réponse--</option>
        <option value="checkbox">checkbox</option>
        <option value="radio">radio</option>
    </select>
    <input type="text" name="text">
    <select name="is_correct" id="is_correct">
        <option value="">--Indiquez si la réponse est correcte--</option>
        <option value="1">correct</option>
        <option value="ra0dio">not correct</option>
    </select>
    <input type="number" name="questions_id">
    <input type="submit">
</form>