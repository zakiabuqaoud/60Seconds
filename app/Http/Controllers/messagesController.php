<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class messagesController extends Controller
{
    public function index()
    {
        //admin
        $messages = Message::get();
        $messageId = 0;
        return view('admin.message.index', compact('messages', 'messageId'));
    }
    public function create()
    {
        $this->authorize('allMessages', Message::class);
        $messages = Message::get();
        return view('admin.message.create', compact('messages'));
    }
    public function store(Request $request)
    {
        $this->authorize('allMessages', Message::class);
        //user
        $request->validate([
            'fullName' => "required",
            'email' => "required",
            "content" => "required"
        ]);
        Message::create($request->all());
        return redirect('/');
    }
    public function edit($id)
    {
        $message = Message::FindOrFail($id);
        $this->authorize('allMessages', $message);
        return view('admin.message.edit', compact('message'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'fullName' => "required",
            'email' => "required",
            "content" => "required"
        ]);
        $message = Message::FindOrFail($id);
        $this->authorize('allMessages', $message);
        $message->update($request->all());
        return redirect()->route('messages.index');
    }
    public function delete($id)
    {
        $message = Message::FindOrFail($id);
        $this->authorize('allMessages', $message);
        $message->delete();
        return redirect()->route('messages.index');
    }
}
