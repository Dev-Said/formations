<form action="/reponses/{{ $reponse->id }}" method="post">
    @csrf
    @method('put')


    <select name="type" id="type">
        <option value="{{$reponse->type}}">{{$reponse->type}}</option>
        <option value="{{ $reponse->type === 'checkbox' ? 'radio' : 'checkbox' }}">{{ $reponse->type === 'checkbox' ? 'radio' : 'checkbox' }}</option>
    </select>
    <input type="text" name="text" value="{{ $reponse->text }}">
    <select name="is_correct" id="is_correct">
        <option value="{{$reponse->is_correct}}">{{$reponse->is_correct}}</option>
        <option value="{{ $reponse->is_correct === '1' ? '0' : '1' }}">{{ $reponse->is_correct === '1' ? '0' : '1' }}</option>
    </select>
    <input type="number" name="questions_id" value="{{ $reponse->questions_id }}">
    <input type="submit">
</form>