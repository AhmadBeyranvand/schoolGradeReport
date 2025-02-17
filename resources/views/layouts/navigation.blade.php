<header class="flex w-full justify-between">
    <div id="right" class="flex justify-start">
        <img class="h-[72px]" src="/static/img/logo_color.svg" alt="">
        <div class="flex flex-col justify-around items-start mr-4">
            <h1 class="text-2xl ">{{config("app.name")}}</h1>
            <legend class="text-gray-500">{{ auth()->user()->first_name }} جان، به وبسایت مدرسه خوش
                اومدین</legend>
        </div>
    </div>
    <div id="left" class="flex gap-6 items-center ">
        <a href=""
            class="bg-[#e2e3e8] dark:text-gray-800  hover:bg-gray-200 py-2 px-5 justify-center items-center rounded-full flex">
            <img src="/static/icons/list.svg" class="h-[32px] ml-3" alt="">
            <p>مشاهده کارنامه</p>
        </a>
        <a href=""
            class="bg-white shadow dark:text-gray-800 shadow-gray-100 dark:shadow-black hover:shadow-gray-200 dark:hover:shadow-gray-500 py-2 px-5 justify-center items-center rounded-full flex">
            <img src="/static/icons/user.svg" class="h-[32px] ml-3" alt="">
            <p>پروفایل</p>
        </a>
    </div>
</header>