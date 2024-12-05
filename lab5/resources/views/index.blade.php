@extends('layouts.app')

@section('content')
    <h1>Личный кабинет</h1>
    <p>Добро пожаловать, {{ $user->name }}!</p>
    <p>Ваш email: {{ $user->email }}</p>
@endsection
