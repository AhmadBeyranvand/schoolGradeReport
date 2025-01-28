<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Grade report view') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="bg-white dark:bg-gray-800 shadow">
            <div
                class="flex md:flex-row flex-col max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-gray-800 dark:text-gray-200">
                <div class="xl:w-1/4 p-3 md:border-l border-l-none border-gray-200 lg:w-1/3 md:w-1/2 w-full flex flex-col items-center">
                    <img class="filter grayscale hover:filter-none" src="/static/img/user.svg" width="120" alt="">
                    <div class="flex gap-3 justify-start w-full p-2">
                        <p>نام:</p>
                        <strong>علی</strong>
                    </div>
                    <div class="flex gap-3 justify-start w-full p-2">
                        <p>نام خانوادگی:</p>
                        <strong>امیری</strong>
                    </div>
                    <div class="flex gap-3 justify-start w-full p-2">
                        <p>نام پدر:</p>
                        <strong>ابوطالب</strong>
                    </div>
                    <div class="flex gap-3 justify-start w-full p-2">
                        <p>کدملی:</p>
                        <strong>4120000110</strong>
                    </div>
                    <div class="flex gap-3 justify-start w-full p-2">
                        <p>پایه:</p>
                        <strong>110</strong>
                    </div>
                    <div class="flex gap-3 justify-start w-full p-2">
                        <p>رشته تحصیلی:</p>
                        <strong>علوم تجربی</strong>
                    </div>
                    <div class="flex gap-3 justify-start w-full p-2">
                        <p>ترم تحصیلی:</p>
                        <strong>دوم 1403-1404</strong>
                    </div>
                </div>
                <div class="xl:w-3/4 p-3 lg:w-2/3 md:w-1/2 w-full">

                    <div class="relative overflow-x-auto xl:w-10/12 border rounded-xl   ">
                        <table class="w-full rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        نام درس
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        نمره
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        تاریخ ثبت
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- To be repeated -->

                                <tr class="bg-white hover:bg-gray-100 hover:dark:bg-gray-800 border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center dark:text-white">
                                        منطق
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        20
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        1403/05/12  --  12:00:43
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</x-app-layout>