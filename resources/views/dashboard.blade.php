<x-app-layout>
    @include('layouts.navigation')
    <section class="flex xl:flex-row flex-col gap-6 justify-start pt-10">
        <div id="profile"
            class="bg-white dark:bg-neutral-700 rounded-3xl p-10 2xl:w-1/3 w-full shadow-xl flex flex-col justify-center">
            <p class="mb-3 text-lg">اطلاعات کاربری شما</p>
            <img class="ring-4 mx-auto my-8 ring-offset-4 ring-gray-200  rounded-full w-[128px]"
                src="/static/img/user.png" alt="">
            <legend class="text-center text-xl">{{ auth()->user()->first_name }}
                {{ auth()->user()->last_name }}
            </legend>
            <p class="text-center my-5">دانش آموز پایه دهم</p>
            <div class="flex 2xl:flex-row flex-col gap-3 items-center justify-around">
                <div class="p-1 rounded-full text-xs bg-white dark:bg-gray-900 shadow-xl flex items-center">
                    <img src="/static/icons/users_small.png" class="w-[12px] mx-1" alt="">
                    <p>تعداد هم‌کلاسی‌ها:</p>
                    <strong class="mx-2">{{24}} نفر</strong>
                </div>
                <div class="p-1 rounded-full text-xs bg-white dark:bg-gray-900 shadow-xl flex items-center">
                    <img src="/static/icons/book_small.png" class="w-[12px] mx-1" alt="">
                    <p>تعداد درس‌ها:</p>
                    <strong class="mx-2">{{24}} عنوان</strong>
                </div>
            </div>
        </div>
        <div id="stats" class="px-10 2xl:w-2/3 w-full flex flex-col items-start">
            <div class="flex 2xl:flex-row flex-col w-full justify-around gap-6">
                <div style="background-image:url('/static/img/warm_pastel_back.jpeg'); background-size:100% 100%"
                    class="rounded-3xl px-16 py-20 shadow-xl flex flex-col justify-center">
                    <legend class="text-right text-xl font-thin my-5">تعداد دروس قبول‌شده</legend>
                    <strong class="text-3xl text-right font-bold my-5">{{17}} درس</strong>
                </div>
                <div style="background-image:url('/static/img/cold_pastel_back.jpg'); background-size:100% 100%"
                    class="rounded-3xl px-16 py-20 shadow-xl flex flex-col justify-center">
                    <legend class="text-right text-xl font-thin my-5">تعداد دروس قبول‌شده</legend>
                    <strong class="text-3xl text-right font-bold my-5">{{17}} درس</strong>
                </div>
            </div>
            <a href="#" id="gray-box"
                class="bg-gray-200 hover:bg-blue-200 p-8 rounded-3xl justify-between mt-6 mx-auto flex xl:w-11/12 w-full">
                <div class="flex flex-col gap-3">
                    <strong>مشاهده نمرات ثبت شده من</strong>
                    <p>دریافت آنلاین کارنامه </p>
                </div>
                <div class="relative flex items-center justify-start book-stack">
                    <img class="rounded-full ring-2 ring-white w-12 h-12" src="/static/books/1.jpg" alt="">
                    <img class="rounded-full ring-2 ring-white w-12 h-12" src="/static/books/2.jpg" alt="">
                    <img class="rounded-full ring-2 ring-white w-12 h-12" src="/static/books/3.jpg" alt="">
                    <img class="rounded-full ring-2 ring-white w-12 h-12" src="/static/books/4.jpg" alt="">
                    <img class="rounded-full ring-2 ring-white w-12 h-12" src="/static/books/5.jpg" alt="">
                </div>
            </a>
        </div>
    </section>
    <section class="pt-10 relative">
        <img src="/static/img/dots.jpg" class="absolute z-0 opacity-15 right-0 left-0 mx-auto"
            style="height: 100%; mix-blend-mode: darken;" alt="">
        <canvas class="z-10 relative w-4/5 mx-auto" id="myChart"></canvas>
    </section>
</x-app-layout>