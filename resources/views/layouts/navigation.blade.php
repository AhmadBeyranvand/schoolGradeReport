<header class="flex w-full justify-between" x-data="{ open: false }">
    <div class="md:hidden flex">
        <button x-on:click="open = ! open">
            <img class="w-8 mr-3 dark:invert" src="/static/icons/menu.svg" alt="">
        </button>
        <div x-transition class="fixed top-0 right-0 backdrop-blur-xl w-full h-full z-[9999] flex flex-col p-3"
            x-show="open" x-cloak style="display: none;">
            <button class="flex mb-3" x-on:click="open = ! open">
                <img src="/static/icons/close.svg" class="w-6 dark:invert" alt="">
                <p class="text-sm mr-3">بستن منو</p>
            </button>
            <div class="w-full bg-white shadow text-gray-900 p-3 rounded-2xl flex">
                <img src="/static/img/user.jpg" class="w-24 rounded-full my-auto" alt="">
                <div class="flex flex-col items-start m-2 justify-center w-full">
                    <legend class="text-xl font-thin">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                    </legend>
                    <div class="flex justify-between my-2 w-full">
                        <a class="border border-gray-200 rounded-full p-3 text-center w-full hover:bg-gray-100 flex justify-center items-center"
                            href="#">
                            ویرایش پروفایل
                        </a>
                        <form action="/logout" method="post">
                            {{ csrf_field() }}
                            <button
                                class="p-3 bg-red-50 hover:bg-red-200 border-2 border-red-500 text-red-500 rounded-full mr-2">
                                <img src="/static/icons/logout.svg" class="w-12" alt="">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white mt-3 shadow text-gray-900 p-3 rounded-2xl flex flex-col">
                @if (auth()->check() && auth()->user()->isAdmin)
                    <a href="{{ route('show_student_manager') }}"
                        class="flex flex-col items-start py-2 px-4 justify-center w-full rounded-2xl hover:bg-gray-200">
                        <div class="flex justify-start items-center my-2 w-full text-gray-700">
                            <img src="/static/icons/listGray.svg" class="w-5 ml-3" alt="">
                            {{ __('Student manager') }}
                        </div>
                    </a>
                    <a href="{{ route('new_semester_grade') }}"
                        class="flex flex-col items-start py-2 px-4 justify-center w-full rounded-2xl hover:bg-gray-200">
                        <div class="flex justify-start items-center my-2 w-full text-gray-700">
                            <img src="/static/icons/chartGray.svg" class="w-5 ml-3" alt="">
                            {{ __('New semester grade input') }}
                        </div>
                    </a>
                @else
                    <a href="{{ route('grade_report_view') }}"
                        class="flex flex-col items-start py-2 px-4 justify-center w-full rounded-2xl hover:bg-gray-200">
                        <div class="flex justify-start items-center my-2 w-full text-gray-700">
                            <img src="/static/icons/chartGray.svg" class="w-5 ml-3" alt="">
                            {{ __('Grade report view') }}
                        </div>
                    </a>
                @endif
            </div>
        </div>
    </div>
    <div id="right" class="flex md:justify-start justify-center md:mx-0 mx-auto">
        <a href="/"><img class="h-[72px]" src="/static/img/logo_color.svg" alt=""> </a>
        <div class="flex flex-col justify-around items-start mr-4">
            <h1 class="md:text-2xl text-lg">{{config("app.name")}}</h1>
            <legend class="text-gray-500 md:text-base text-xs">{{ auth()->user()->first_name }} جان، به وبسایت مدرسه خوش
                اومدین</legend>
        </div>
    </div>
    <div id="left" class="gap-6 items-center md:flex hidden">
        @if (auth()->check() && auth()->user()->isAdmin)
            <a href="{{ route('show_student_manager') }}"
                class="bg-[#e2e3e8] dark:text-gray-800  hover:bg-gray-200 py-2 px-5 justify-center items-center rounded-full flex">
                <img src="/static/icons/list.svg" class="h-[32px] ml-3" alt="">
                <p>{{ __('Student manager') }}</p>
            </a>
        @else
            <a href="{{ route('grade_report_view') }}"
                class="bg-[#e2e3e8] dark:text-gray-800  hover:bg-gray-200 py-2 px-5 justify-center items-center rounded-full flex">
                <img src="/static/icons/list.svg" class="h-[32px] ml-3" alt="">
                <p>{{ __('Grade report view') }}</p>
            </a>
        @endif
        <div class="relative">
            <button @click="open = ! open"
                class="bg-white relative z-10 shadow dark:text-gray-800 shadow-gray-100 dark:shadow-black hover:shadow-gray-200 dark:hover:shadow-gray-500 py-2 px-5 justify-center items-center rounded-full flex">
                <img src="/static/icons/user.svg" class="h-[32px] ml-3" alt="">
                <p>{{ auth()->user()->name }}</p>
            </button>
            <div x-show="open" id="profile" style="display: none;" x-transition
                class="absolute w-full bg-white rounded-b-3xl overflow-hidden pt-7 -mt-7 z-0">
                <a href="{{ route('profile.edit') }}" class="flex gap-2 py-3 px-3 bg-white hover:bg-gray-100">
                    <img src="/static/icons/user.svg" class="w-6" alt="">
                    {{ __('Profile') }}
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="/logout" onclick="event.preventDefault(); this.closest('form').submit();"
                        class="flex gap-2 py-3 px-3 bg-red-100 text-red-700 hover:bg-red-200">
                        <img src="/static/icons/logout.svg" class="w-6 fill-red-100" alt="">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>
    </div>
</header>