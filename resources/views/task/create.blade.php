@extends('layout.master')
@section('main')
	<div class="container mt-3">
		<h2>Add Task</h2>

		<form action="{{ route('tasks.store') }}" method="POST">
			@csrf

			<input class="form-control form-control-lg" name='name' placeholder="name" type="text">
			<input class="form-control mt-3" name='description' placeholder="description" type="text">

			<select class="form-control mt-3" name="user_id">
				<option>Select a user</option>

				@foreach ($users as $user)
					<option value="{{ $user->id }}">{{ $user->name }}</option>
				@endforeach

			</select>

			<button>Add</button>
		</form>
	</div>
@endsection
