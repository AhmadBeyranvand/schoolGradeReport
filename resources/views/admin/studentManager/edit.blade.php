<x-app-layout>
    <main class="flex flex-col xl:w-3/4 lg:w-3/5 w-full border-l md:p-10 p-3">
        @include('layouts.navigation')
        @include('components.return', ['custom_route'=>route('show_student_manager')])
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <form method="post" class="max-w-xl">
                        {{csrf_field()}}
                        <div class="my-8">
                            <x-input-label for="first_name" :value="__('First name')" />
                            <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full"
                                :value="old('first_name', $user->first_name)" required autofocus
                                autocomplete="first_name" />
                            <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                        </div>
                        <div class="my-8">
                            <x-input-label for="last_name" :value="__('Last name')" />
                            <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full"
                                :value="old('last_name', $user->last_name)" required autofocus
                                autocomplete="last_name" />
                            <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                        </div>
                        <div class="my-8">
                            <x-input-label for="father_name" :value="__('Father name')" />
                            <x-text-input id="father_name" name="father_name" type="text" class="mt-1 block w-full"
                                :value="old('father_name', $user->father_name)" required autofocus
                                autocomplete="last_name" />
                            <x-input-error class="mt-2" :messages="$errors->get('father_name')" />
                        </div>
                        <div class="my-8">
                            <x-input-label for="national_code" :value="__('National code')" />
                            <x-text-input id="national_code" name="national_code" type="text" class="mt-1 block w-full"
                                :value="old('national_code', $user->national_code)" required autofocus
                                autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('national_code')" />
                        </div>
                        <div class="my-8">
                            <x-input-label for="username" :value="__('username')" />
                            <x-text-input style="direction:ltr" id="username" name="username" type="text"
                                class="mt-1 block w-full" :value="old('username', $user->username)" required autofocus
                                autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('username')" />
                        </div>
                        <div class="my-8">
                            <x-input-label for="phone" :value="__('Phone')" />
                            <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full"
                                :value="old('phone', $user->phone)" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                        </div>
                        <div class="my-8">
                            <x-input-label for="password" :value="__('New password')" />
                            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" />
                            <x-input-error class="mt-2" :messages="$errors->get('password')" />
                        </div>
                        <div class="my-8">
                            <x-input-label for="classroom_id" :value="__('Classroom name')" />
                            <select name="classroom_id" id="classroom_id" class="border-gray-300 w-full rounded-md">
                                @foreach ($classrooms as $c)
                                    @if ($user->classroom_id == $c->id)
                                        <option selected value="{{$c->id}}">{{$c->title}}</option>
                                    @else
                                        <option value="{{$c->id}}">{{$c->title}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('classroom_id')" />
                        </div>
                        <x-primary-button class="w-full justify-center py-3 text-lg">ثبت تغییرات</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>