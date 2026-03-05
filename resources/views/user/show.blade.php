<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title></title>
@extends('layout')

@section('content')
    <h2>Профиль пользователя</h2>
    <div>
        <p>ID: {{ $user->id }}</p>
        <p>Имя: {{ $user->name }}</p>
        <p>Фамилия: {{ $user->surname }}</p>
    </div>
@endsection
</head>
</body>
</html>