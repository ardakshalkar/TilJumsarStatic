@extends('_layouts.main')

@section('body')
<h1 class="p-5 text-2xl font-bold font-['Inter']">Бейне сабақ: </h1>
<div class="flex">
    <!--
    <div class="w-1/2 flex flex-col ">
    @foreach ($videos as $video)
        <div class=" border-2 rounded border-gray m-5">
            <div class="flex">
                <div class="ml-5 p-5 flex-grow">
                    <a href="#" class="hover:underline font-bold text-lg">{{ $video->title }}</a>
                </div>
                <div class="bg-gray-200 rounded p-2 text-sm m-5 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"          stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <div>
                        {{ $video->minutes }} минут
                    </div>
                </div>
            </div>
        </div>
        
    @endforeach
    </div>-->
    <div class="w-full m-5 content-center">
        <iframe class="mx-auto" width="840" height="450" src="{{ $videos['1_video']->youtube }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>
@endsection
