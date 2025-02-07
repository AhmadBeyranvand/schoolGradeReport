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
					<form action="{{route('submit_grades')}}" class="w-full" method="post">
						<input type="hidden" name="course_id" value="{{$course_id}}">
						<input type="hidden" name="semester_year" value="{{$semester_year}}">
						<input type="hidden" name="semester_part" value="{{$semester_part}}">
						<input type="hidden" name="classroom_id" value="{{$classroom_id}}">
						{{csrf_field()}}
						<div id="desktopTable" class="md:table hidden w-full">
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
											<input
												class="border-gray-200 dark:border-gray-600 p-1 bg-white text-gray-800 dark:bg-gray-700 dark:text-gray-50 w-20 xl:rounded-xl rounded-lg"
												value={{$st['grade']}} min="0" step="0.01" max="20" type="number"
												name="student[{{$st->id}}]">
										</td>
										<td>
											<button type="submit" tabindex="-1">تاریخچه</button>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<table class="md:hidden table" id="mobile">
							<thead>
								<tr>
									<th scope="col">کد ملی</th>
									<th scope="col">نام</th>
									<th scope="col">نام خانوادگی</th>
									<th scope="col">نام پدر</th>
									<th scope="col">نمره</th>
									<th scope="col">عملیات</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($students as $st)
								<tr class="bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-600">
									<td class="border-b border-gray-200 dark:border-gray-600" data-label="کد ملی">
										{{$st->national_code}}
									</td>
									<td class="border-b border-gray-200 dark:border-gray-600" data-label="نام">
										{{$st->first_name}}
									</td>
									<td class="border-b border-gray-200 dark:border-gray-600" data-label="نام خانوادگی">
										{{$st->last_name}}
									</td>
									<td class="border-b border-gray-200 dark:border-gray-600" data-label="نام پدر">
										{{$st->father_name}}
									</td>
									<td class="border-b border-gray-200 dark:border-gray-600" data-label="نمره">
										<input
											class="border-gray-200 dark:border-gray-600 p-1 bg-white text-gray-800 dark:bg-gray-700 dark:text-gray-50 w-20 xl:rounded-xl rounded-lg"
											value="0" min="0" max="20" type="number" name="grade[{{$st->id}}]">
									</td>
									<td class="border-b border-gray-200 dark:border-gray-600" data-label="عملیات">
										<p> lorem </p>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<x-primary-button class="w-full justify-center py-3 text-lg">ثبت نمرات</x-primary-button>

					</form>

					<style>
						.dt-input {
							border-color: #dedede !important;
							border-radius: 10px !important;
						}

						tr:hover {
							background: rgba(0, 0, 0, 0.05) !important;
						}

						tr+tr {
							border-top: 1px solid rgba(128, 128, 128, 0.2) !important;
						}

						th {
							text-align: center !important;
						}

						.dt-layout-end {
							margin: auto auto auto 0;
						}

						div.dt-container select.dt-input {
							padding: 5px 30px 5px 10px;
						}

						.dt-layout-start {
							margin: auto 0 auto auto;
						}
					</style>

					<script>
						if (window.outerWidth >= 768) {
							document.getElementById("mobile").remove()
						} else {
							document.getElementById("desktopTable").remove()
						}
					</script>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>