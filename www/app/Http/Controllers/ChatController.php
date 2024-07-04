<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChatRequest;
use App\Models\Chat;
use App\Models\Message;
use App\Models\User;

class ChatController extends Controller
{

    public function index()
    {
        $chats = auth()->user()->chats;

        return view('chat-home', ['chats' => $chats]);
    }
    public function showChatForm(Chat $chat)
    {
        $chats = auth()->user()->chats;

        $messages = $chat->messages;

        return view('chat-form', ['chats' => $chats, 'messages' => $messages, 'chat' => $chat]);

    }

    public function addChatForm()
    {
        return view('add-chat-form',[
            'users' => User::query()->where('id', '!=', auth()->id())->get(),
        ]);
    }

    public function addChatProcess(ChatRequest $request)
    {
        $chat = Chat::query()->create([
            'name' => $request->name,
        ]);

        $chat->users()->attach(auth()->id());

        $chat->users()->attach($request->user_id);

        return redirect(route('chat', [
            'chat' => $chat->id,
        ]));
    }

    public function showChatEditForm(Chat $chat)
    {

        return view('edit-chat-form', [
            'chat' => $chat,
            'users' => User::query()->where('id', '!=', auth()->id())->get(),
        ]);
    }

    public function chatEditFormProcess(Chat $chat, ChatRequest $request)
    {
        $chat->update($request->validated());

        $chat->users()->sync($request->user_id);

        return redirect(route('chat', [
            'chat' => $chat->id
        ]));
    }

    public function deleteChatProcess(Chat $chat)
    {
        $chat->delete();

        return redirect(route('chat-home'));
    }

    public function deleteMessageProcess(Message $message)
    {
        $chatId = $message->chat_id;

        $message->delete();

        return redirect(route('chat', [
            'chat' => $chatId,
        ]));
    }
}
