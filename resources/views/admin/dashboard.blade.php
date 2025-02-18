<x-app-layout>
    <main class="flex flex-col xl:w-3/4 lg:w-3/5 w-full border-l md:p-10 p-3">
        @include('layouts.navigation')

        <section class="flex xl:flex-row flex-col gap-6 justify-start pt-10">
            <div id="profile"
                class="bg-white dark:bg-neutral-700 rounded-3xl xl:p-10 p-5 2xl:w-1/3 w-full shadow-xl flex flex-col justify-center">
                <p class="mb-3 text-lg">اطلاعات کاربری شما</p>
                <img class="ring-4 mx-auto my-8 ring-offset-4 ring-offset-white ring-gray-300 dark:ring-offset-neutral-700 dark:ring-neutral-500 rounded-full w-[128px]"
                    src="/static/img/user.png" alt="">
                <legend class="text-center text-xl">{{ auth()->user()->first_name }}
                    {{ auth()->user()->last_name }}
                </legend>
                <p class="text-center my-5">مدیر سایت</p>
                <div class="flex 2xl:flex-row flex-col gap-3 items-center justify-around">
                    <div class="p-1 rounded-full text-xs bg-white dark:bg-gray-900 shadow-xl flex items-center">
                        <img src="/static/icons/users_small.png" class="w-[12px] mx-1" alt="">
                        <p>تعداد هم‌کلاسی‌ها:</p>
                        <strong class="mx-2">{{20}} نفر</strong>
                    </div>
                    <div class="p-1 rounded-full text-xs bg-white dark:bg-gray-900 shadow-xl flex items-center">
                        <img src="/static/icons/book_small.png" class="w-[12px] mx-1" alt="">
                        <p>تعداد درس‌ها:</p>
                        <strong class="mx-2">{{30}} عنوان</strong>
                    </div>
                </div>
            </div>
            <div id="stats" class="px-5 2xl:w-2/3 w-full flex flex-col items-start text-gray-800">
                <div class="flex 2xl:flex-row flex-col w-full justify-around gap-6">
                    <div style="background-image:url('/static/img/warm_pastel_back.jpeg'); background-size:100% 100%"
                        class="rounded-3xl xl:px-16 px-5 xl:py-20 py-10 shadow-xl flex flex-col justify-center">
                        <legend class="text-right text-xl font-thin my-5">تعداد نمرات وارد شده</legend>
                        <strong class="text-3xl text-right font-bold my-5">{{20}} درس</strong>
                    </div>
                    <div style="background-image:url('/static/img/cold_pastel_back.jpg'); background-size:100% 100%"
                        class="rounded-3xl xl:px-16 px-5 xl:py-20 py-10 shadow-xl flex flex-col justify-center">
                        <legend class="text-right text-xl font-thin my-5">تعداد دروس قبول‌شده</legend>
                        <strong class="text-3xl text-right font-bold my-5">{{10}} درس</strong>
                    </div>
                </div>
                <a href="{{ route('new_semester_grade') }}" id="gray-box"
                    class="bg-gray-200 2xl:flex-row xl:flex-col md:flex-row flex-col hover:bg-blue-200 p-8 rounded-3xl justify-between mt-6 mx-auto flex xl:w-11/12 w-full">
                    <div class="flex flex-col gap-3 2xl ">
                        <strong class="2xl:tex-right xl:text-center text-right">{{ __('New semester grade input') }}</strong>
                        <p class="2xl:tex-right xl:text-center text-right">ورود یا ویرایش نمرات دانش‌آموزان</p>
                    </div>
                    <div
                        class="relative flex items-center 2xl:justify-start xl:justify-center justify-start book-stack 2xl:mt-0 xl:mt-5 md:mt-0 mt-5 ">
                        <img class="rounded-full ring-2 ring-white w-12 h-12" src="/static/books/1.jpg" alt="">
                        <img class="rounded-full ring-2 ring-white w-12 h-12" src="/static/books/2.jpg" alt="">
                        <img class="rounded-full ring-2 ring-white w-12 h-12" src="/static/books/3.jpg" alt="">
                        <img class="rounded-full ring-2 ring-white w-12 h-12" src="/static/books/4.jpg" alt="">
                        <img class="rounded-full ring-2 ring-white w-12 h-12" src="/static/books/5.jpg" alt="">
                    </div>
                </a>
            </div>
        </section>
        <section class="mt-10 relative rounded-3xl">
            <legend class="md:text-2xl md:mt-16 my-5 px-10">نمودار مقایسه معدل کلاس‌ها</legend>
            <img src="/static/img/dots.jpg"
                class="absolute z-0 opacity-15 right-0 left-0 mx-auto filter dark:invert mix-blend-darken dark:mix-blend-lighten h-full"
                alt="">
            <canvas class="z-10 relative md:w-4/5 w-full mx-auto" id="adminChart"></canvas>
        </section>
    </main>
</x-app-layout>