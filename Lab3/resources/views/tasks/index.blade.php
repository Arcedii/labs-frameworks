<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
</head>
<body>
    <h1>Tasks</h1>

    <ul>
        @foreach($tasks as $task)
            <li>
                <a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a> 
                (Category: {{ $task->category->name }})
                @if($task->tags->count())
                    <ul>
                        @foreach($task->tags as $tag)
                            <li>{{ $tag->name }}</li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</body>
</html>
