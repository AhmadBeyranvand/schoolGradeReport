@props(['color' => 'blue', 'title' => "Default Content", 'value'=>"Default Value"])

@php
    $boxColor = match ($color) {
        'yellow' => 'from-[#FFD400] to-[#FFEA61]',
        'red' => 'from-[#ff7095] to-[#ffb898]',
        'blue' => 'from-[#69b2ef] to-[#00d5e6]',
        'green' => 'from-[#00c2af] to-[#4cd5c8]',
        default => 'bg-gray-700',
    };

@endphp

<div class="relative w-full max-w-[400px] min-h-[200px] rounded-2xl shadow overflow-hidden xl:w-1/4 bg-gradient-to-r {{ $boxColor }}">
    <img src="/static/img/bokeh.png" class="absolute opacity-50 z-[1] top-0 left-0 w-full" alt="">
    <div class="w-full h-full relative z-[10] flex flex-col text-white p-5  items-center justify-center">
        <strong class="shadow-black drop-shadow my-3">{{$title}}</strong>
        <legend class="text-3xl filter shadow-black my-3 drop-shadow font-thin">{{$value}}</legend>
    </div>
</div>