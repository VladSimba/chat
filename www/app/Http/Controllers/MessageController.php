<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Chat;
use App\Models\Message;
use Carbon\Carbon;


class MessageController extends Controller
{

    public function addMessageProcess(MessageRequest $request, Chat $chat)
    {
        $message = Message::query()->create([
            'user_id' => auth()->user()->id,
            'chat_id' => $chat->id,
            'text' => $request->text,
            'date_time' => Carbon::now(),
        ]);

        return redirect(route('chat', ['chat' => $chat->id]));


    }

    public function editMessageProcess(MessageRequest $request, Message $message)
    {
        $message->update($request->validated());

        $chatId = $message->chat_id;

        return redirect(route('chat', [
            'chat' => $chatId,
        ]));
    }
}
