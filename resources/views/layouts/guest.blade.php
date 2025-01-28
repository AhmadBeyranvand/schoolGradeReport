<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <img src="/static/img/logo.svg"
                class="glow w-[256px] h-[124px] xl:w-[431px] xl:h-[208px] lg:w-[265px] lg:h-[128px]" alt="">
        </div>
        <div class="xl:w-3/12 lg:min-h-screen min-h-[50vh] w-full p-12 bg-white flex flex-col justify-center items-center">
            {{ $slot }}
        </div>
    </main>
    <script type="module" src="/static/js/vfx.js"></script>
</body>

</html>