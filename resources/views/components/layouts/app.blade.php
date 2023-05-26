<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <title>{{ $title ?? __('common.conf_name') }}</title>

</head>
<body class="font-sans antialiased">

<div class="antialiased flex flex-col h-screen ">
    <div class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="text-gray-100 inline-flex items-center">
                    <x-heroicon-s-support class="w-10 h-10 mr-2"/>
                    <span class="font-bold">{{ __('layout.society_name') }}</span>
                </div>
                <div>
                    <a class="text-white hover:underline" href=""
                       target="_blank">{{ __('layout.recommended_app_env') }}</a>
                </div>
            </div>
        </div>
    </div>

    <main class="flex-1 bg-gray-100">
        <header class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                <h1 class="text-lg leading-6 font-semibold text-gray-900">
                    {{ $heading ?? '' }}
                </h1>
            </div>
        </header>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

    <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-center content-center text-gray-100">
            <div class="text-xs">© The {{ __('layout.society_name') }} Japan. All Rights Reserved.</div>
        </div>
    </footer>
</div>


</body>
</html>
