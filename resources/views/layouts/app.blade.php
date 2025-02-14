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

<body class="bg-[#cbcdda] dark:bg-neutral-900">
    <div class="w-full xl:p-10 md:p-8 p-3">
        <div class="flex w-full bg-[#f4f6fa]">
            <main class="flex flex-col xl:w-3/4 border-l">
                <header class="p-10 flex w-full justify-between">
                    <div id="right" class="flex justify-start">
                        <img class="h-[72px]" src="/static/img/logo_color.svg" alt="">
                        <div class="flex flex-col justify-around items-start mr-4">
                            <h1 class="text-2xl text-gray-800">{{config("app.name")}}</h1>
                            <legend class="text-gray-500">{{ auth()->user()->first_name }} جان، به وبسایت مدرسه خوش اومدین</legend>
                        </div>
                    </div>
                    <div id="left" class="flex gap-6 items-center ">
                        <a href="" class="bg-[#e2e3e8] hover:bg-gray-200 py-2 px-5 justify-center items-center rounded-full flex">
                            <img src="/static/icons/list.svg" class="h-[32px] ml-3" alt="">
                            <p>مشاهده کارنامه</p>
                        </a>
                        <a href="" class="bg-white shadow shadow-gray-100 hover:shadow-gray-200 py-2 px-5 justify-center items-center rounded-full flex">
                            <img src="/static/icons/user.svg" class="h-[32px] ml-3" alt="">
                            <p>پروفایل</p>
                        </a>
                    </div>
                </header>
            </main>
            <aside>
                Side Bard
            </aside>
            
            <!-- <main>
            {{  $slot  }}
            </main> -->
        </div>
    </div>

</body>

</html>