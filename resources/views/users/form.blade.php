<form action="/users" method="post">
    @csrf
    <input type="text" name="nom">
    <input type="text" name="prenom">
    <select name="sexe" id="sexe">
        <option value="">--sexe--</option>
        <option value="masculin">masculin</option>
        <option value="feminin">feminin</option>
    </select>
    <select name="admin" id="admin">
        <option value="">--admin--</option>
        <option value="1">admin</option>
        <option value="0">not admin</option>
    </select>
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="submit">
</form>