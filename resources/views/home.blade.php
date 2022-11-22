<x-guest-layout>
    <div class="bg-white pb-8 sm:pb-12 lg:pb-12 flex flex-col items-center">
        <div class="overflow-hidden pt-8 sm:pt-6 lg:relative">
            <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                <div>
                    <div class="mt-20">
                        <div class="mt-6 sm:max-w-xl">
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Keep track of your groceries</h1>
                            <p class="mt-6 text-xl text-gray-500">
                                Organize your entire household's weekly groceries all in one place.
                            </p>
                        </div>
                        <form class="mt-6 sm:max-w-xl space-y-6" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                                <div class="min-w-0 flex-1">
                                    <label for="email" class="sr-only">Email address</label>
                                    <input id="email" type="email" name="email" :value="old('email')" required autofocus class="block w-full rounded-md border border-gray-300 px-5 py-3 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="E-mail">
                                </div>
                            </div>

                            <div>
                                <label for="password" class="sr-only">Password</label>
                                <input id="password" type="password" name="password" required autocomplete="current-password" class="block w-full rounded-md border border-gray-300 px-5 py-3 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Password">
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                                </div>
                                <div class="text-sm">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
                                    @endif
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

