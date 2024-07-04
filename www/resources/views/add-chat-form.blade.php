<form method="post" action="{{ route('add-chat-process') }}">
    @csrf
    <input name="name" type="text" placeholder="Сhat name">
    <select name="user_id[]" multiple="multiple">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    <div class="form-group mt-3 mb-0">
        <button type="submit" class="btn btn-primary float-right">Submit</button>
    </div>
</form>


