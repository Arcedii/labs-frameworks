@extends('layouts.app')
@include('components.task', ['task' => $task])

@section('title', 'Просмотр задачи')

@section('content')
@include('components.task', [
        'title' => $task['title'],
        'description' => $task['description'],
        'status' => $task['status'],
        'priority' => $task['priority'],
        'assignee' => $task['assignee']
    ])
@endsection
