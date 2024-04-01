@extends('layout.master')
@section('main')
	<div>

		<h2>ALL TASKS</h2>

		@isset($seesion)
			<div class="alert alert-success">
				{{ $seesion }}
			</div>
		@endisset

		@if (Auth::user()->role == 'admin')
			<a href="{{ route('tasks.create') }}">New Task</a>
		@endif

		<ul class="list-group">
			@foreach ($tasks as $task)
				<li class="list-group-item d-flex justify-content-between">
					<span>{{ $task->name }}</span>
					<a href="{{ route('tasks.show', ['task' => $task->id]) }}">
						<span class="fa fa-eye"></span>
					</a>

					@if (Auth::user()->role == 'admin')
						<form action="{{ route('tasks.delete', $task) }}" method="post">
							@csrf
							@method('delete')
							<button><i class="fa fa-trash"></i></button>
						</form>
					@endif
				</li>
			@endforeach
		</ul>

	</div>
@endsection
