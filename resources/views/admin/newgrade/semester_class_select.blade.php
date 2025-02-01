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
                        <div class="w-full">
                        <form action="" 
                        class="mx-auto w-full bg-white dark:bg-gray-900 w-full mb-3 rounded-lg p-3 "
                            method="post">
                                {{csrf_field()}}
                                <div class="flex md:gap-8 gap-6 items-end md:my-5 my-8 flex md:flex-row flex-col justify-between items-center">
                                    <div class="flex flex-col">
                                        <label for="semester_year">سال تحصیلی</label>
                                        <input name="semester_year" id="semester_year" value={{$year}}
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
                                    <div class="flex flex-col ">
                                        <label for="classrooms">کلاس</label>
                                        <select id="classrooms" name="classrooms" class="dark:bg-gray-800 rounded-lg py-1 md:w-32 w-28 border-gray-200">
                                            @foreach ($classrooms as $c)
                                            <option value={{$c->id}}>{{$c->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <x-primary-button>ثبت و ادامه</x-primary-button>
                                </div>
                            </form>
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