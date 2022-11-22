<x-account-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Sign in to your account</h2>
            </div>
        </x-slot>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div>
            <div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <div class="mt-1">
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input class="block mt-1 w-full"
                                      id="password"
                                      type="password"
                                      name="password"
                                      required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <div class="flex items-center">
                            <input id="remember_me" type="checkbox" name="remember" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-900">{{ __('Remember me') }}</label>
                        </div>

                        <div class="text-sm">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
                            @endif

                        </div>
                    </div>

                    <x-primary-button class="mt-4">
                        {{ __('Log in') }}
                    </x-primary-button>

                    <a href="{{ route('register') }}" class="mt-4 flex w-full justify-center rounded-md border border-transparent bg-transparent py-2 px-4 text-sm font-medium text-gray-800 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        {{ __('Register new account') }}
                    </a>
                </form>
            </div>
        </div>
    </x-auth-card>
</x-account-layout>
