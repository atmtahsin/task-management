@extends('layouts.app')

@section('title', 'Task Management App')

@section('content')
  <nav class="mb-20 mt-12 text-4xl font-extrabold">
    <a href="{{ route('tasks.create') }}" class="link">Add Task!</a>
  </nav>

  @forelse ($tasks as $task)
    <div class="mt-8">
      <a class="text-2xl text-slate-700 font-bold" href="{{ route('tasks.show', ['task' => $task->id]) }}"
        @class(['line-through' => $task->completed])>{{ $task->title }}</a>
    </div>
  @empty
    <div>There are no tasks!</div>
  @endforelse

  @if ($tasks->count())
    <nav class="mt-48">
      {{ $tasks->links() }}
    </nav>
  @endif
@endsection
