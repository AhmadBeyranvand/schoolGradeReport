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

				</div>
				<div class=" min-h-[60vh] w-full flex justify-center items-center">
					<form action="" class="w-full" method="post">
						{{csrf_field()}}
						<table id="dtTable" class="w-full text-center">
							<thead>
								<tr>
									<th>کد ملی</th>
									<th>نام</th>
									<th>نام خانوادگی</th>
									<th>نام پدر</th>
									<th>نمره</th>
									<th>عملیات</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($students as $st)
									<tr>
										<td>{{$st->national_code}}</td>
										<td>{{$st->first_name}}</td>
										<td>{{$st->last_name}}</td>
										<td>{{$st->father_name}}</td>
										<td>
											<input class="border-gray-200 w-20 rounded-xl" value="0" type="number" name="grade" id="">
										</td>
										<td>
											<input class="border-gray-200 w-20 rounded-xl" value="0" type="number" name="grade" id="">
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						<x-primary-button class="w-full justify-center py-3 text-lg">ثبت نمرات</x-primary-button>
					</form>

					<style>
						th {
							text-align: center !important;
						}
						.dt-layout-end {
							margin: auto auto auto 0;
						}
						div.dt-container select.dt-input{
							padding: 5px 20px;
						}
						.dt-layout-start {
							margin: auto 0 auto auto;
						}
					</style>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>