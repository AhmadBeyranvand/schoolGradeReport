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
            <main class="flex flex-col xl:w-3/4 lg:w-3/5 w-full border-l md:p-10 p-3">
                @include('layouts.navigation')
                @if (!request()->routeIs('admin_dashboard') and !request()->routeIs('dashboard'))
                    <a href="/"
                        class="return-btn flex gap-3 mt-10 mr-5 bg-[#cbcdda] hover:text-white hover:bg-gray-600 ml-auto py-3 px-8 text-sm rounded-full">
                        <img src="/static/icons/return.svg" class="w-4" alt="">
                        بازگشت
                    </a>
                @endif

                {{  $slot  }}

            </main>
            <aside class="xl:w-1/4 lg:w-2/5 lg:flex flex-col hidden px-3">
                <h3 class="py-10 text-xl flex gap-3">
                    <img src="/static/icons/chart.svg" class="w-5 filter dark:invert" alt="">
                    وضعیت دروس
                </h3>
                <div class="grade_status shadow mt-5 p-4 flex items-center bg-red-50 rounded-2xl justify-between">
                    <div class="flex gap-4">
                        <img src="/static/books/1.jpg" class="w-20 rounded-xl border-2 " alt="">
                        <div class="flex flex-col">
                            <p class="my-2">نامدرس</p>
                            <div>
                                <p class="text-sm">میانگین نمره‌ی کلاس: </p>
                                <strong>{{ 15.5 }}</strong>
                            </div>
                            <div>
                                <p class="text-sm">اختلاف نمره‌ی شما با میانگین کلاس: </p>
                                <strong class="text-red-600">{{ 3.5 }}</strong>
                            </div>
                        </div>
                    </div>
                    <canvas class="h-10 transform rotate-180 arrow_red"></canvas>
                </div>
                <div class="grade_status shadow mt-5 p-4 flex items-center bg-green-50 rounded-2xl justify-between">
                    <div class="flex gap-4">
                        <img src="/static/books/1.jpg" class="w-20 rounded-xl border-2 " alt="">
                        <div class="flex flex-col">
                            <p class="my-2">نامدرس</p>
                            <div>
                                <p class="text-sm">میانگین نمره‌ی کلاس: </p>
                                <strong>{{ 15.5 }}</strong>
                            </div>
                            <div>
                                <p class="text-sm">اختلاف نمره‌ی شما با میانگین کلاس: </p>
                                <strong class="text-green-600">{{ 3.5 }}</strong>
                            </div>
                        </div>
                    </div>
                    <canvas class="h-10 arrow_green"></canvas>
                </div>
                <!-- <div class="grade_status shadow mt-5 p-4 flex items-center bg-gray-100 rounded-2xl justify-between">
                    <div class="flex gap-4">
                        <img src="/static/books/1.jpg" class="w-20 rounded-xl border-2 " alt="">
                        <div class="flex flex-col">
                            <p class="my-2">نامدرس</p>
                            <div>
                                <p class="text-sm">میانگین نمره‌ی کلاس: </p>
                                <strong>{{ 15.5 }}</strong>
                            </div>
                            <div>
                                <p class="text-sm">اختلاف نمره‌ی شما با میانگین کلاس: </p>
                                <strong class="text-blue-600">بدون اختلاف</strong>
                            </div>
                        </div>
                    </div>
                    <img src="/static/icons/arrow_blue.svg" class="h-10 ml-5 transform -rotate-90">
                </div> -->
            </aside>
        </div>
    </div>

</body>

</html>