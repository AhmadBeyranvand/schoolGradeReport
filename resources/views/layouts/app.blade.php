<!DOCTYPE html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/static/css/font.css">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset
        @if (session('status'))
            <div class="pt-4">
                <div x-data="{open : true}" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-blue-100 my-2 rounded-lg p-4 text-blue-800 flex" x-show="open" x-on:click="open = false">
                        {{ session('status') }}
                        <span class="px-3 py-1 cursor-pointer text-sm mr-auto bg-blue-800 text-blue-100 rounded">بستن</span>
                    </div>
                </div>
            </div>
        @endif
        @if(session('error'))
            <div class="pt-4">
                <div x-data="{open : true}" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-red-100 my-2 rounded-lg p-4 text-red-800 flex" x-show="open" x-on:click="open = false">
                        {{ session('error') }}
                        <span class="px-3 py-1 cursor-pointer text-sm mr-auto bg-red-800 text-red-100 rounded">بستن</span>
                    </div>
                </div>
            </div>
        @endif
        @if($errors->any())
            <div class="pt-4">
                <div x-data="{open : true}" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    {!! implode('', $errors->all('
                                            <div class="bg-red-100 my-2 rounded-lg p-4 text-red-800 flex" x-show="open" x-on:click="open = false">
                                                        :message
                                                        <span class="px-3 py-1 cursor-pointer text-sm mr-auto bg-red-800 text-red-100 rounded">بستن</span>
                                                    </div>
                                            ')) !!}
                </div>
            </div>
        @endif
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>