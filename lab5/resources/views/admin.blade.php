@extends('layouts.app')

@section('content')
    <h1>Админ-панель</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} ({{ $user->email }})</li>
        @endforeach
    </ul>
@endsection
