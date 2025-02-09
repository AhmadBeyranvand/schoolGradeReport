<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
			{{ __('Student manager') }}
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div
				class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100 w-full">

				<div class=" min-h-[60vh] w-full flex justify-center items-center">
					<form action="{{route('submit_grades')}}" class="w-full" method="post">
						<div id="desktopTable" class="md:table hidden w-full">
							<table id="dtTable" class="w-full text-center">
								<thead>
									<tr>
										<th>کد ملی</th>
										<th>نام</th>
										<th>نام خانوادگی</th>
										<th>نام پدر</th>
										<th>کلاس</th>
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
												@foreach ($classrooms as $c)
													@if ($st->classroom_id == $c->id)
														{{$c->id}} - {{$c->title}}
													@endif
												@endforeach
											</td>
											<td>
												<a href={{route("show_student_edit", ['id' => $st->id])}}
													class="bg-indigo-400 hover:bg-indigo-600 rounded mx-1 p-1 text-xs text-white">ویرایش
													اطلاعات</a>
												<a href={{route("show_student_grades", ['id' => $st->id])}}
													class="bg-emerald-600 hover:bg-emerald-700 rounded mx-1 p-1 text-xs text-white">مشاهده
													نمرات</a>
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
									<th scope="col">کلاس</th>
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

										<td class="border-b border-gray-200 dark:border-gray-600" data-label="کلاس">
											@foreach ($classrooms as $c)
												@if ($st->classroom_id == $c->id)
													{{$c->id}} - {{$c->title}}
												@endif
											@endforeach
										</td>
										<td class="border-b border-gray-200 dark:border-gray-600" data-label="عملیات">
											<a href={{route("show_student_edit", ['id' => $st->id])}}
												class="bg-indigo-400 hover:bg-indigo-600 rounded mx-1 p-1 text-xs text-white">ویرایش
												اطلاعات</a>
											<a href={{route("show_student_grades", ['id' => $st->id])}}
												class="bg-emerald-600 hover:bg-emerald-700 rounded mx-1 p-1 text-xs text-white">مشاهده
												نمرات</a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						<!-- <x-primary-button class="w-full justify-center py-3 text-lg">ثبت نمرات</x-primary-button> -->

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