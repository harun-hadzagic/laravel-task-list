<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello, I am a blade template</h1>
    <div>
        {{-- @if (count($tasks)) --}}
        @forelse ($tasks as $task)
            <a href="{{route('tasks.show', ['id'=>$task->id])}}">{{$task->title}}</a>
            {{-- <div>{{ $task->title }}</div> --}}
        @empty
            <div>No tasks</div>
        @endforelse
        {{-- @endif --}}
    </div>
</body>

</html>
