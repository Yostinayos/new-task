@extends('layout.master')
@section('main')
	<div>

		<h2>ALL UserS</h2>

		<ul class="list-group">
			@foreach ($users as $user)
				<li class="list-group-item d-flex justify-content-between">
					<span>{{ $user->name }}</span>
					<a href="/tasks/{{ $user->id }}">
						<span class="fa fa-eye"></span>
					</a>
				</li>
			@endforeach
		</ul>

	</div>
@endsection
