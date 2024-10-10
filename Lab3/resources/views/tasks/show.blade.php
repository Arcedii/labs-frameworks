<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
</head>
<body>
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <p>Category: {{ $task->category->name }}</p>

    <h3>Tags</h3>
    @if($task->tags->count())
        <ul>
            @foreach($task->tags as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
