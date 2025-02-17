<header class="flex w-full justify-between" x-data="{ open: false }">
    <div id="right" class="flex justify-start">
        <a href="{{route('dashboard')}}"><img class="h-[72px]" src="/static/img/logo_color.svg" alt=""> </a>
        <div class="flex flex-col justify-around items-start mr-4">
            <h1 class="text-2xl ">{{config("app.name")}}</h1>
            <legend class="text-gray-500">{{ auth()->user()->first_name }} جان، به وبسایت مدرسه خوش
                اومدین</legend>
        </div>
    </div>
    <div id="left" class="flex gap-6 items-center ">
        <a href="{{ route('grade_report_view') }}"
            class="bg-[#e2e3e8] dark:text-gray-800  hover:bg-gray-200 py-2 px-5 justify-center items-center rounded-full flex">
            <img src="/static/icons/list.svg" class="h-[32px] ml-3" alt="">
            <p>{{ __('Grade report view') }}</p>
        </a>
        <div class="relative">
            <button @click="open = ! open"
                class="bg-white relative z-10 shadow dark:text-gray-800 shadow-gray-100 dark:shadow-black hover:shadow-gray-200 dark:hover:shadow-gray-500 py-2 px-5 justify-center items-center rounded-full flex">
                <img src="/static/icons/user.svg" class="h-[32px] ml-3" alt="">
                <p>{{ auth()->user()->name }}</p>
            </button>
            <div x-show="open" x-transition class="absolute w-full bg-white rounded-b-3xl overflow-hidden pt-7 -mt-7 z-0">
                <a href="{{ route('profile.edit') }}" class="flex gap-2 py-3 px-3 bg-white hover:bg-gray-100">
                    <img src="/static/icons/user.svg" class="w-6" alt="">
                    {{ __('Profile') }}
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a 
                        href="#logout" 
                        onclick="event.preventDefault(); this.closest('form').submit();"
                        class="flex gap-2 py-3 px-3 bg-red-100 text-red-700 hover:bg-red-200">
                        <img src="/static/icons/logout.svg" class="w-6 fill-red-100" alt="">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>
    </div>
</header>