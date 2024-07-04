<form method="post" action="{{ route('edit-chat-form-process', ['chat' => $chat,]) }}">
    @csrf
    <input name="name" type="text" value="{{ $chat->name }}">
    <select name="user_id[]" multiple="multiple">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    <div class="form-group mt-3 mb-0">
        <button type="submit" class="btn btn-primary float-right">Edit</button>
    </div>
</form>
<form method="post" action="{{ route('delete-chat', ['chat' => $chat->id]) }}">
    @csrf
    <button type="submit">Delete chat</button>
</form>
