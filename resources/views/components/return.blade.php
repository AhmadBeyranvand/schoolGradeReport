@props(['custom_route' => false])
@php
$link = $custom_route ? $custom_route : (url()->current() . '/../');
@endphp
<a href="{{ $link }}"
    class="return-btn flex gap-3 mt-10 mr-5 bg-[#cbcdda] text-gray-800 hover:text-white hover:bg-gray-600 ml-auto py-3 px-8 text-sm rounded-full">
    <img src="/static/icons/return.svg" class="w-4" alt="">
    بازگشت
</a>