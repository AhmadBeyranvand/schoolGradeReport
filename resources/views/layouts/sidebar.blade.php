<aside class="xl:w-1/4 lg:w-2/5 lg:flex flex-col hidden px-3">
    <h3 class="py-10 text-xl flex gap-3">
        <img src="/static/icons/chart.svg" class="w-5 filter dark:invert" alt="">
        وضعیت دروس
    </h3>
    @if (count($gradeStatus) > 0)
        @foreach ($gradeStatus as $grd)
            @if ($grd['student_grade'] > $grd['avg_grade'])
                <div class="grade_status shadow mt-5 p-4 flex items-center bg-green-50 rounded-2xl justify-between">
                    <div class="flex gap-4">
                        <img src="/static/books/{{ $grd['course_id'] }}.jpg" class="w-20 rounded-xl border-2 " alt="">
                        <div class="flex flex-col">
                            <p class="my-2">{{ $grd['course_name'] }}</p>
                            <div>
                                <p class="text-sm">میانگین نمره‌ی کلاس: </p>
                                <strong>{{ $grd['avg_grade'] }}</strong>
                            </div>
                            <div style="direction: ltr; text-align: right;">
                                <p class="text-sm">اختلاف نمره‌ی شما با میانگین کلاس: </p>
                                <strong class="text-green-600 ml-auto mr-0" >{{ $grd['student_grade'] - $grd['avg_grade'] }}</strong>
                            </div>
                        </div>
                    </div>
                    <canvas class="h-10 arrow_green"></canvas>
                </div>
            @elseif ($grd['student_grade'] < $grd['avg_grade'])
                <div class="grade_status shadow mt-5 p-4 flex items-center bg-red-50 rounded-2xl justify-between">
                    <div class="flex gap-4">
                        <img src="/static/books/{{ $grd['course_id'] }}.jpg" class="w-20 rounded-xl border-2 " alt="">
                        <div class="flex flex-col">
                            <p class="my-2">{{ $grd['course_name'] }}</p>
                            <div>
                                <p class="text-sm">میانگین نمره‌ی کلاس: </p>
                                <strong>{{ $grd['avg_grade'] }}</strong>
                            </div>
                            <div style="direction: ltr; text-align: right;">
                                <p class="text-sm">اختلاف نمره‌ی شما با میانگین کلاس: </p>
                                <strong class="text-red-600 ml-auto mr-0" >{{ $grd['student_grade'] - $grd['avg_grade'] }}</strong>
                            </div>
                        </div>
                    </div>
                    <canvas class="h-10 transform rotate-180 arrow_red"></canvas>
                </div>
            @elseif ($grd['student_grade'] == $grd['avg_grade'])
                <div class="grade_status shadow mt-5 p-4 flex items-center bg-gray-100 rounded-2xl justify-between">
                    <div class="flex gap-4">
                        <img src="/static/books/{{ $grd['course_id'] }}.jpg" class="w-20 rounded-xl border-2 " alt="">
                        <div class="flex flex-col">
                            <p class="my-2">{{ $grd['course_name'] }}</p>
                            <div>
                                <p class="text-sm">میانگین نمره‌ی کلاس: </p>
                                <strong>{{ $grd['avg_grade'] }}</strong>
                            </div>
                            <div>
                                <p class="text-sm">اختلاف نمره‌ی شما با میانگین کلاس: </p>
                                <strong class="text-blue-600">بدون اختلاف</strong>
                            </div>
                        </div>
                    </div>
                    <img src="/static/icons/arrow_blue.svg" class="h-10 ml-5 transform -rotate-90">
                </div>
            @endif
        @endforeach
    @else
        <div class="flex flex-col">
            <canvas id="lottie_student"></canvas>
            <p class="max-w-xs text-justify mx-auto text-gray-600 leading-[2] font-light">
                هنوز هیچ نمره‌ای برای شما ثبت نشده‌است. پس از ثبت اولین نمره می‌توانید جزئیات جالبی را در این‌جا مشاهده کنید
            </p>
        </div>
    @endif
</aside>