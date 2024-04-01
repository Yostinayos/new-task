@extends('layout.master')

@section('main')
	<div class="card">

		<div class="card-header">

			<h5 class="my-3">
				<a href="{{ route('tasks.index') }}">All Tasks</a>
			</h5>
			<h2 class="text-primary">
				{{ $task->name }} - {{ $task->status }}
			</h2>
		</div>

		<div class="card-body">
			<div>
				<p>
					{{ $task->description }}
				</p>
			</div>
		</div>

		<div class="card-footer">
			{{ $task->user->name }}

			<a href="{{ route('tasks.edit', ['task' => $task->id]) }}">Update</a>
		</div>
	</div>
@endsection
