<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" name="task" required>
        <button type="submit">Add Task</button>
    </form>

    <ul>
        @foreach($tasks as $task)
            <li>
                {{ $task->task }} - {{ $task->status }}
                @if($task->status === 'pending')
                    <a href="{{ route('tasks.complete', $task->id) }}">Complete</a>
                @endif
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
