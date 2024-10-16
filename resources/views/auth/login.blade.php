<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded bg-gray-100 border-gray-300 dark:border-gray-700 text-orange-500 shadow-sm focus:ring-orange-400 dark:focus:ring-orange-500 dark:focus:ring-offset-orange-500" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            {{-- @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif --}}

            <x-primary-button class="mx-auto">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Divider -->
    <div class="mt-6 flex items-center justify-center">
        <div class="border-t border-gray-300 flex-grow mr-3"></div>
        <span class="text-gray-500 font-medium">{{ __('or') }}</span>
        <div class="border-t border-gray-300 flex-grow ml-3"></div>
    </div>

    <!-- Register Link -->
    <div class="mt-6 text-center">
        <p class="text-sm text-gray-600 dark:text-gray-400">
            {{ __("Don't have an account?") }}
            <a href="{{ route('register') }}" class="font-medium text-orange-400 hover:text-orange-500 dark:text-orange-400 dark:hover:text-orange-300">
                {{ __('Register now') }}
            </a>
        </p>
    </div>
</x-guest-layout>