<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
			{{ __('View grades of') }} {{$student->name}}
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
			<div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
				@if(count($grades)>0)
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
							<th scope="col" class="px-6 py-3 text-center">
								ثبت کننده
							</th>
						</tr>
					</thead>
					<tbody>
						<!-- To be repeated -->
						@foreach ($grades as $grade)
							<tr
								class="bg-white hover:bg-gray-100 hover:dark:bg-gray-800 border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
								<td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center dark:text-white">
									{{$grade['title']}}
								</td>
								<td class="px-6 py-4 text-center">
									{{$grade['amount']}}
								</td>
								<td class="px-6 py-4 text-center">
									{{$grade['time']}}
								</td>
								<td class="px-6 py-4 text-center">
									{{$grade['author']}}
								</td>
							</tr>
						@endforeach

					</tbody>
				</table>
				@else
				<div class="flex flex-col justify-center items-center">
					<canvas id="lottie-book" style="width: 600px;"></canvas>
					<p class="md:text-2xl text-sm text-center text-[#264984] mt-3 font-thin">
						هنوز هیچ نمره‌ای برای این دانش آموز ثبت نشده است
					</p>
				</div>
				@endif
			</div>
		</div>
	</div>
</x-app-layout>