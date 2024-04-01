<x-guest-layout>
	<!-- Session Status -->
	<x-auth-session-status :status="session('status')" class="mb-4" />

	<form action="{{ route('login') }}" method="POST">
		@csrf

		<!-- Email Address -->
		<div>
			<x-input-label :value="__('Email')" for="email" />
			<x-text-input :value="old('email')" autocomplete="username" autofocus class="block mt-1 w-full" id="email" name="email" required type="email" />
			<x-input-error :messages="$errors->get('email')" class="mt-2" />
		</div>

		<!-- Password -->
		<div class="mt-4">
			<x-input-label :value="__('Password')" for="password" />

			<x-text-input autocomplete="current-password" class="block mt-1 w-full" id="password" name="password" required type="password" />

			<x-input-error :messages="$errors->get('password')" class="mt-2" />
		</div>

		<!-- Remember Me -->
		<div class="block mt-4">
			<label class="inline-flex items-center" for="remember_me">
				<input class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
					id="remember_me" name="remember" type="checkbox">
				<span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
			</label>
		</div>

		<div class="flex items-center justify-end mt-4">
			@if (Route::has('password.request'))
				<a
					class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
					href="{{ route('password.request') }}">
					{{ __('Forgot your password?') }}
				</a>
			@endif
		</div>

		<div class="flex items-center justify-between mt-4">
			@if (Route::has('register'))
				<a
					class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
					href="{{ route('register') }}">
					{{ __('Do not have account? create one now') }}
				</a>
			@endif

			<x-primary-button class="ms-3">
				{{ __('Log in') }}
			</x-primary-button>
		</div>
	</form>
</x-guest-layout>
