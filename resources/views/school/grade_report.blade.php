<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Grade report view') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="bg-white dark:bg-gray-800 shadow rounded-xl">
            <div
                class="flex md:flex-row flex-col max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-gray-800 dark:text-gray-200">
                <div
                    class="xl:w-1/4 p-3 md:border-l border-l-none border-gray-200 lg:w-1/3 md:w-1/2 w-full flex flex-col items-center">
                    <img class="filter grayscale hover:filter-none" src="/static/img/user.svg" width="120" alt="">
                    <div class="flex gap-3 justify-start w-full p-2">
                        <p>نام:</p>
                        <strong>{{auth()->user()->first_name}}</strong>
                    </div>
                    <div class="flex gap-3 justify-start w-full p-2">
                        <p>نام خانوادگی:</p>
                        <strong>{{auth()->user()->last_name}}</strong>
                    </div>
                    <div class="flex gap-3 justify-start w-full p-2">
                        <p>نام پدر:</p>
                        <strong>{{auth()->user()->father_name}}</strong>
                    </div>
                    <div class="flex gap-3 justify-start w-full p-2">
                        <p>کدملی:</p>
                        <strong>{{auth()->user()->national_code}}</strong>
                    </div>
                    <div class="flex gap-3 justify-start w-full p-2">
                        <p>نام کلاس:</p>
                        <strong>{{auth()->user()->classroom_id}}</strong>
                    </div>
                    <div class="flex gap-3 justify-start w-full p-2">
                        <p> پایه :</p>
                        <strong>{{ $userInfo['level'] }}</strong>
                    </div>
                    <div class="flex gap-3 justify-start w-full p-2">
                        <p>ترم تحصیلی:</p>
                        <strong>ترم {{ $userInfo['semester'] }} سال  {{$userInfo['year']}}-{{$userInfo['year']+1}}</strong>
                    </div>
                </div>
                <div class="xl:w-3/4 p-3 lg:w-2/3 md:w-1/2 w-full">

                    <div class="relative overflow-x-auto xl:w-10/12 border rounded-xl   ">
                        <table class="w-full rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        نام درس
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        نمره
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        تاریخ ثبت
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- To be repeated -->
                                @foreach ($grades as $grade)
                                    <tr
                                        class="bg-white hover:bg-gray-100 hover:dark:bg-gray-800 border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center dark:text-white">
                                            {{$grade['title']}}
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            {{$grade['amount']}}
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            {{$grade['time']}}
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</x-app-layout>