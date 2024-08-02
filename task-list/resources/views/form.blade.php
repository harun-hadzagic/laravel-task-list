@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('content')
    <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div class="mb-4">
            <label for="title" class="block uppercase text-slate-700 mb-2">
                Title
            </label>
            <input type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}"  @class(['shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none', 'border-red-500' => $errors->has('title')])/>
            @error('title')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block uppercase text-slate-700 mb-2">
                Description
            </label>
            <textarea type="textarea" name="description" id="description" rows="5" class="shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none @error('description') border-red-500 @enderror">{{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="long_description" class="block uppercase text-slate-700 mb-2">
                Long description
            </label>
            <textarea type="textarea" name="long_description" id="long_description" rows="10" class="shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none @error('long_description') border-red-500 @enderror">{{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex gap-2 items-center">
            <button type="submit" class="rounded-md px-2 py-1 text-centered font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50">
                @isset($task)
                    Update Task
                @else
                    Add Task
                @endisset
            </button>
            <a href="{{route('tasks.index')}}" class="font-medium text-gray-700 underline decoration-pink-500">Cancle</a>
        </div>
    </form>
@endsection
