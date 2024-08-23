@extends('_layouts.main')

@section('body')
<div class="p-8 ">
@php
    $levelLessons = $lessons->filter(function($value, $key) use ($page){
        return $page->title == $value->level;
    });
    $currentLevel = $page->title;
@endphp
    <h1 class="text-3xl font-bold">Деңгейлер!</h1>
    <div class="flex flex-row py-5">
        <a href="{{ $levels["A1_level"]->getUrl() }}/index.html" class="{{ $page->title=='A1' ? 'border-4 border-red-800' : 'border border-gray-200' }} text-center w-1/2 py-5 px-5 me-2 text-xl mb-2 font-medium text-gray-900 focus:outline-none bg-white rounded-lg  hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">A1</a>
        <a href="{{ $levels["A2_level"]->getUrl() }}/index.html" class="{{ $page->title=='A2' ? 'border-4 border-red-800' : 'border border-gray-200' }} text-center w-1/2 py-5 px-5 me-2 mb-2 text-xl font-medium text-gray-900 focus:outline-none bg-white rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">A2</a>
    </div>
    <div class="flex flex-col">
    @foreach ($levelLessons as $lesson)
        <div class="border hover:border-red-500 border-gray-200 rounded-lg p-5 my-2 bg-white">
            <span class="w-6 h-6 rounded-full  inline-flex items-center justify-center  
                bg-white text-gray-700 text-xl font-bold border-gray-900 border-2">{{ $lesson->lessonOrder }}</span>
            <a href="{{ $lesson->getUrl() }}/index.html" class="py-2 font-['Inter'] text-3xl hover:underline font-bold"> 
                {{ $lesson->title }}
            </a>
            {{ $lesson }}
            <img class="w-full" src="{{ $page->getBaseUrl() }}/assets/images/dummy_banner2.png"/>
            <!--<img class="w-full" src="{{ $page->getBaseUrl() }}/assets/images/{{ $lesson->image }}"/>-->
            <div class="flex flex-row justify-evenly font-['Inter'] my-5">
                <div class="px-3" >
                    <a href="{{ $lesson->getUrl() }}/index.html" class="text-2xl hover:font-bold">
                        Бейне сабақ
                    </a>
                    <!--<a href="{{ $page->getBaseUrl() }}/videos/{{ $lesson->lessonId }}-video/index.html" class="text-2xl hover:font-bold">Бейне сабақ</a>-->
                    <div class="discrete_progress_bar" style="background-position:{{ -100 + (4-$lesson->videoLesson)*25 }}%"></div>
                </div>
                <div class="px-3">
                    <!--{{ $lesson->videoId }}-->
                    <a href="{{ $videos[$lesson->videoId]->getUrl() }}/index.html" class="text-2xl hover:font-bold">Бейне жазба</a>
                    <div class="discrete_progress_bar" style="background-position:{{ -100 + (4-$lesson->videoRecord)*25 }}%"></div>
                </div>
                <div class="px-3">
                    <!--<a href="{{ $page->getBaseUrl() }}/texts/index.html" class="text-2xl hover:font-bold">Мәтін</a>-->
                    <a href="{{$texts[$lesson->textId]->getUrl() }}/index.html" class="text-2xl hover:font-bold">Мәтін</a>
                    <div class="discrete_progress_bar" style="background-position:{{ -100 + (4-$lesson->text)*25 }}%"></div>
                </div>
                <div class="px-3">
                    
                    <a href="{{ $songs[$lesson->songId]->getUrl() }}/index.html" class="text-2xl hover:font-bold">Ән айту</a>
                    <div class="discrete_progress_bar" style="background-position:{{ -100 + (4-$lesson->song)*25 }}%"></div>
                </div>
            </div>
        </div>
        
    @endforeach
    </div>
</div>
@endsection
