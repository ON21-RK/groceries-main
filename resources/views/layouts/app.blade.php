<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <livewire:styles />
</head>
<body class="antialiased">
<div class="min-h-full">
    <div class="min-h-full">
        <nav class="">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 justify-between">
                    <div class="ml-6 flex items-center gap-3">
                        <div class="relative ml-3">
                            <div>
                                <a href="{{ route('dashboard') }}" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                                    Dashboard
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="ml-6 flex items-center gap-3">
                        <div class="relative ml-3">
                            <div>
                                <a href="{{ route('account') }}" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                                    Account
                                </a>
                            </div>
                        </div>
                        <div class="relative ml-3">
                            <div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-muted-button type="submit">Logout</x-muted-button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="py-10">
            <main>
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</div>
<livewire:scripts />
</body>
</html>
