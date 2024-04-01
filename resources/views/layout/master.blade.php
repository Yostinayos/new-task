<!DOCTYPE html>
<html lang="en">

<head>
	@include('layout.head')

</head>

<body>
	<div class="container-scroller">
		@include('layout.header')
		<div class="container-fluid page-body-wrapper">
			@include('layout.aside')

			@include('layout.settings')

			@yield('main')
		</div>

		@include('layout.footer')

	</div>
	@include('layout.script')
</body>

</html>
