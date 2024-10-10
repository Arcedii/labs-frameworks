@extends('layouts.app')

@section('title', 'Список задач')

@section('content')
    <h1>Список задач</h1>

    <ul>
        <li>Задача 1: Купить продукты</li>
        <li>Задача 2: Закончить лабораторную работу</li>
        <li>Задача 3: Позвонить коллеге</li>
    </ul>

    <a href="{{ route('tasks.create') }}">Создать новую задачу</a>
@endsection
