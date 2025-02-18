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

<body class="bg-[#cbcdda] dark:bg-neutral-900 text-gray-800 dark:text-gray-300">
    <div class="w-full xl:p-10 md:p-8 p-3">
        <div class="flex w-full bg-[#f4f6fa] dark:bg-neutral-800 rounded-3xl overflow-hidden">
            {{ $slot }}
        </div>
    </div>


    @if (session('status'))
        <div class="toast"> {{ session('status') }} </div>
    @endif
    @if(session('error'))
        <div class="toast"> {{ session('error') }} </div>
    @endif
    @if($errors->any())
        {!! implode('', $errors->all('
            <div class="bg-red-100 my-2 rounded-lg p-4 text-red-800 flex" x-show="open" x-on:click="open = false">
                        :message
                        <span class="px-3 py-1 cursor-pointer text-sm mr-auto bg-red-800 text-red-100 rounded">بستن</span>
                    </div>
        ')) !!}
    @endif

</body>

</html>