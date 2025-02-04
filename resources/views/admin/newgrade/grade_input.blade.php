<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
			{{ __('New semester grade input') }}
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div
				class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100 w-full">

				<div
					class="mx-auto w-full bg-white dark:bg-gray-900 w-full mb-3 rounded-lg p-3 flex md:flex-row flex-col items-end w-full justify-between">
					<a class="bg-gray-900 text-white dark:bg-white dark:text-gray-900 hover:bg-gray-800 dark:hover:bg-gray-200 py-2 px-3 text-sm rounded-lg"
						href="{{route('new_semester_grade')}}">بازگشت به انتخاب سال و ترم تحصیلی</a>
					<form action="" method="post" class="flex gap-2 items-end">
						{{csrf_field()}}

						<x-primary-button>ادامه</x-primary-button>
					</form>
				</div>
				<div class=" min-h-[60vh] w-full flex justify-center items-center">
					<legend class="text-2xl">لطفا کلاس را انتخاب کنید</legend>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>