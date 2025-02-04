<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
			{{ __('New semester grade input') }}
		</h2>
	</x-slot>

	<div class="py-12" x-data="{ year: {{$year}} }">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900 dark:text-gray-100 ">
					<form action={{route("grades_input")}}
						class="mx-auto w-full bg-white dark:bg-gray-900 w-full mb-3 rounded-lg p-3 flex md:gap-8 gap-6 items-end md:my-5 my-8 flex md:flex-row flex-col justify-center md:items-end items-center"
						method="get">
						<div class="flex flex-col">
							<label for="semester_year">{{__("Semester Year")}}</label>
							<input required name="semester_year" id="semester_year" value={{$year}} x-model="year"
								class="dark:bg-gray-800 rounded-lg py-1 md:w-32 w-24 border-gray-200" type="number"
								min="1403" max="1500" />
						</div>
						
						<div class="flex flex-col ">
							<label for="semester_part">ترم تحصیلی</label>
							<select required class="dark:bg-gray-800 rounded-lg py-1  border-gray-200"
								name="semester_part" id="semester_part">
								<option value="1">ترم اول</option>
								<option value="2">ترم دوم</option>
								<option value="3">ترم تابستانه</option>
							</select>
						</div>
						<div class="flex flex-col ">
							<label for="classrooms">کلاس</label>
							<select required id="classrooms" name="classroom_id" onclick="()=>{alert('ssss')}"
								class=" dark:bg-gray-800 rounded-lg py-1 border-gray-200">
								@foreach ($classrooms as $c)
									<option value={{$c->id}}>{{$c->title}}</option>
								@endforeach
							</select>
						</div>

						<x-primary-button class="md:px-12 px-20 py-2">ادامه</x-primary-button>
					</form>
					<div class="text-center">
						سال تحصیلی
						<strong x-text="parseInt(year)+1"></strong>
						-
						<strong x-text="year"></strong>
					</div>
					<div class="min-h-[60vh] w-full flex justify-center items-center">
						<legend class="text-2xl">لطفا مشخصات ترم و سال و کلاس را انتخاب کنید</legend>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>