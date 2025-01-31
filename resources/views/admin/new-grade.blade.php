<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('New semester grade input') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 ">
                    <div class="w-full flex md:flex-row flex-col">
                        <div
                            class="mx-auto bg-white dark:bg-gray-900 w-full mb-3 border-b border-gray-200 rounded-lg p-3 flex md:flex-row flex-col justify-between items-center ">
                            <!-- Select Semester - Step 1-1 -->
                            @if(!isset($_POST['semester_year']) || isset($_POST['semester_part']))
                                <form action="" method="post">

                                    <div class="flex md:gap-8 gap-3 items-end md:my-5 my-8">
                                        <div class="flex flex-col ">
                                            <label for="semester_year">سال تحصیلی</label>
                                            <input name="semester_year" id="semester_year"
                                                class="dark:bg-gray-800 rounded-lg py-1 md:w-32 w-24 border-gray-200"
                                                type="number" min="1403" max="1500">
                                        </div>
                                        <div class="flex flex-col ">
                                            <label for="semester_part">ترم تحصیلی</label>
                                            <select class="dark:bg-gray-800 rounded-lg py-1 md:w-32 w-28 border-gray-200"
                                                name="semester_part" id="semester_part">
                                                <option value="1">ترم اول</option>
                                                <option value="2">ترم دوم</option>
                                                <option value="3">ترم تابستانه</option>
                                            </select>
                                        </div>
                                        <x-primary-button>ثبت و ادامه</x-primary-button>
                                    </div>
                                </form>
                            @else
                                <!-- Selected Semester - Step 1-2 -->
                                <div class="flex flex-col items-start">
                                    <div>
                                        <p>مشخصات ترم تحصیلی: </p>
                                        <strong> ترم
                                            {{"دوم"}}
                                            سال تحصیلی
                                            {{1403}} &#45; {{1403 + 1}}
                                        </strong>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div
                            class="mx-auto bg-white dark:bg-gray-900 w-full mb-3 border-b border-gray-200 rounded-lg p-3 flex md:flex-row flex-col justify-between items-center ">
                            <!-- Select classroom - Step 2 -->
                            <!-- <div class="flex md:gap-8 gap-3 items-end md:my-5 my-8">
                                <div class="flex flex-col ">
                                    <label for="classroom_id">انتخاب کلاس</label>
                                    <select name="classroom_id" id="classroom_id"
                                        class="dark:bg-gray-800 rounded-lg py-1 border-gray-200">
                                        <option value="103">{{103}} - {{"دوازدهم تجربی"}}</option>
                                    </select>
                                </div>
                                <x-primary-button>ورود نمرات</x-primary-button>
                            </div> -->
                        </div>
                    </div>
                    <div class="min-h-[60vh] w-full flex justify-center items-center">
                        <!-- <legend class="text-2xl">لطفا مشخصات ترم و سال را انتخاب کنید</legend> -->
                        <!-- <legend class="text-2xl">لطفا کلاس را انتخاب کنید</legend> -->
                    </div>
                    <!-- <div class="flex flex-col">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id maiores laboriosam rem doloribus sed! Quaerat cum saepe molestias culpa inventore atque excepturi magnam dolore quam tempora magni iste, nemo in!
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>