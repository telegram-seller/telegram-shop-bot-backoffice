<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::query()->orderBy("created_at")->get();

        return view("messages.index", [
            "messages" => $messages
        ]);
    }

    public function create()
    {
        return view("messages.create");
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $message = Message::create($data);

        return redirect()->route("messages.index");
    }

    public function show(string $id)
    {
        $message = Message::query()->find($id);

        return view("messages.show",[
            "message" => $message
        ]);
    }

    public function edit(string $id)
    {
        $message = Message::query()->find($id);

        return view("messages.edit",[
            "message" => $message
        ]);
    }

    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $message = Message::query()->find($id);

        $message->update($data);

        return redirect()->route("messages.show", $id);
    }

    public function destroy(string $id)
    {
        $message = Message::query()->find($id);

        $message->delete();

        return redirect()->route("messages.index");
    }

    public function editSecondaryMessages(string $id)
    {
        $message = Message::query()->find($id);

        $secondaryMessages = Message::query()->where("id", "!=", $id)->get();

        return view("messages.link",[
            "message" => $message,
            "secondaryMessages" => $secondaryMessages
        ]);
    }

    public function updateSecondaryMessages(Request $request, string $id)
    {
        $secondaryMessages = $request->input("messages");

        $secondaryMessages = array_keys($secondaryMessages);

        $primaryMessage = Message::query()->find($id);

        $primaryMessage->secondaryMessages()->sync($secondaryMessages);

        return redirect()->route("messages.index");
    }
}
