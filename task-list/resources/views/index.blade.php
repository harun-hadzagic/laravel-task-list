@extends('layouts.app')

@section('title', 'The list of tasks')
@section('content')

    <nav class="mb-4"><a href="{{ route('task.create') }}" class="font-medium text-gray-700 underline decoration-pink-500">Add Task</a></nav>
    {{-- @if (count($tasks)) --}}
    @forelse ($tasks as $task)
        <a href="{{ route('tasks.show', ['task' => $task->id]) }}" @class(['line-through' => $task->completed])>{{ $task->title }}</a><br />
        {{-- <div>{{ $task->title }}</div> --}}
    @empty
        <div>No tasks</div>
    @endforelse
    {{-- @endif --}}
    @if ($tasks->count())
        <nav class="mt-4">
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection
