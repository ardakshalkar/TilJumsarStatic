@extends('_layouts.main')

@section('body')
<h1 class="p-5 text-2xl font-bold font-['Inter']">Бейне сабақ</h1>
<div class="flex">
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
        <!--<iframe width="560" height="315" src="{{ $video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>-->
        <!--
        <div class="max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-1/2 m-5">    
            <div class="rounded-md border-2 w-fit p-2 m-2 border-gray-200">{{ $video->level }}</div>
            <img src="{{ $page->getBaseUrl() }}/assets/images/{{ $video->image }}"/>
            <h1 class="p-5 text-neutral-700 text-2xl font-bold font-['Inter']">{{ $video->title }}</h1>
            <a href="{{ $page->getBaseUrl() }}/songs/1-song/index.html" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Бастау</a>
        </div>
        -->
    @endforeach
    </div>
    <div class="w-1/2 m-5">
        <iframe width="560" height="315" src="{{ $videos['1_video']->youtube }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>
@endsection
