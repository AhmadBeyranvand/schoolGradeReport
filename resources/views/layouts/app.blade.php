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
        <div class="flex w-full bg-[#f4f6fa] dark:bg-neutral-800 rounded-3xl">
            <main class="flex flex-col xl:w-3/4 border-l p-10">
                @include('layouts.navigation')
                {{  $slot  }}

            </main>
            <aside>
                <div id="chartdiv" class="w-96 h-80 bg-red-100"></div>
            </aside>

            <!-- <main>
            </main> -->
        </div>
    </div>

</body>

</html>