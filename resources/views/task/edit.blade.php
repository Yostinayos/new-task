@extends('layout.master')
@section('main')
	<div class="container mt-3">
		<h2>Add Task</h2>

		<form action="{{ route('tasks.update', $task) }}" method="POST">
			@csrf
			@method('put')

			<select name="status">
				<option value="receved">Receved</option>
				<option value="pending">Pending</option>
				<option value="done">Done</option>
			</select>

			<button>Update</button>
		</form>
	</div>
@endsection
