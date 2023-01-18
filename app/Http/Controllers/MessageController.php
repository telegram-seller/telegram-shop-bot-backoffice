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
}
