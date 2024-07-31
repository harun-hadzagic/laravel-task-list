@extends('layouts.app')

@section('title', 'The list of tasks')
@section('content')

    <div><a href="{{ route('task.create') }}">Add Task</a></div>
    {{-- @if (count($tasks)) --}}
    @forelse ($tasks as $task)
        <a href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->title }}</a><br />
        {{-- <div>{{ $task->title }}</div> --}}
    @empty
        <div>No tasks</div>
    @endforelse
    {{-- @endif --}}
    @if ($tasks->count())
        <nav>
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection
