<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <x-main-menu/>

    <main class="-mt-32">
        <div class="mx-auto max-w-7xl px-4 pb-12 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <div class="rounded-lg bg-white px-5 py-6 shadow sm:px-6">
                <div class="min-h-96 rounded-lg border-4 border-dashed border-gray-200">
                    @yield('content')
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </main>
</div>
<livewire:scripts />
</body>
</html>
