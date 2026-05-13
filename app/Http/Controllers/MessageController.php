<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

public function index()
{
    $messages = Message::orderBy('created_at', 'desc')->get();
    return view('guestbook.index', compact('messages'));
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|max:255',
        'message' => 'required',
    ]);

    Message::create($request->all());

    return redirect()->route('guestbook.index')
                     ->with('success', 'Ваше сообщение успешно сохранено!');
}
?>
