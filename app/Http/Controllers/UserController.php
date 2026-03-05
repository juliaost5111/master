<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name = 'Иван';
        $surname = 'Иванов';
        return view('user.index', compact('name', 'surname'));
    }
}
public function show($id)
{
    $user = User::find($id);
    return view('user.show', compact('user'));
}

public function create()
{
    return view('user.create');
}

public function edit($id)
{
    $user = User::find($id);
    return view('user.edit', compact('user'));
}

?>
