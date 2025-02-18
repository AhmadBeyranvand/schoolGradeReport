<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="/static/css/font.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            text-align: center;
        }

        section {
            margin: auto;
        }
    </style>
</head>

<body>
    <main class="w-full min-h-screen bg-cover flex lg:flex-row flex-col"
        style="background: url('/static/img/school.webp') no-repeat center center;">
        <div x-transition
            class="flex lg:min-h-screen min-h-[50vh] xl:w-9/12 lg:p-0 py-24 w-full bg-black bg-opacity-[50%] filter backdrop-blur flex flex-col text-center items-center justify-center">
            <img src="/static/img/logo_white.svg" class="glow w-[260px]  xl:w-[500px] lg:w-[300px]" alt="">
            <div class="md:flex hidden justify-center bg-white absolute bottom-5 w-[98%] left-0 right-0 mx-auto p-3 ">
                طراحی شده در استودیوی طراحی
                <a class="text-purple-600" href="https://havirweb.ir">هاویر وب</a>
                ™
            </div>
        </div>
        <div
            class="xl:w-3/12 lg:min-h-screen min-h-[50vh] w-full p-12 bg-white dark:bg-gray-800 flex flex-col justify-center items-center">
            {{ $slot }}
        </div>
        <div class="md:hidden flex justify-center bg-white absolute bottom-0 w-[98%] left-0 right-0 mx-auto p-3 ">
            طراحی شده در استودیوی طراحی
            <a class="text-purple-600 mx-1" href="https://havirweb.ir">هاویر وب</a>
            ™
        </div>
    </main>
    <script type="module" src="/static/js/vfx.js"></script>
</body>

</html>