@extends('layouts.app')

@section('title', 'The list of tasks')
@section('content')
    {{-- @if (count($tasks)) --}}
    @forelse ($tasks as $task)
        <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a><br/>
        {{-- <div>{{ $task->title }}</div> --}}
    @empty
        <div>No tasks</div>
    @endforelse
    {{-- @endif --}}
@endsection
