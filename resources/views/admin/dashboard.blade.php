<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }} مدیریت
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex w-full md:flex-row flex-col justify-center gap-8 flex-wrap">
                <x-statbox value="{{$countOfStudents}} نفر" title="تعداد دانش‌آموزان" color="red" />
                <x-statbox value="{{$lastGradeTime}}" title="آخرین ورود نمره" color="blue" />
                <x-statbox value="{{$numberOfRejected}} دانش آموز" title="تعداد مردودی‌ها" color="green" />
            </div>
            <canvas class="my-10 w-full h-full" id="lottie_dashboard"></canvas>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            </div>
        </div>
    </div>
</x-app-layout>