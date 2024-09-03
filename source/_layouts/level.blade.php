@extends('_layouts.main')

@section('body')
<div class="p-4 md:p-8">
@php
    $levelLessons = $lessons->filter(function($value, $key) use ($page){
        return $page->title == $value->level;
    });
    $currentLevel = $page->title;
@endphp
    <h1 class="text-3xl font-bold">Деңгейлер!</h1>
    <!-- Mobile select field -->
    <div class="md:hidden py-5">
        <select id="levelSelect" class="text-center w-full p-2 border border-gray-300 rounded-lg text-xl font-medium text-gray-900 bg-white focus:ring-4 focus:ring-gray-100 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600">
            <option value="{{ $levels['A1_level']->getUrl() }}/index.html" {{ $page->title == 'A1' ? 'selected' : '' }}>A1</option>
            <option value="{{ $levels['A2_level']->getUrl() }}/index.html" {{ $page->title == 'A2' ? 'selected' : '' }}>A2</option>
        </select>
    </div>

    <!-- Desktop buttons -->
    <div class="hidden md:flex flex-row py-5">
        <a href="{{ $levels['A1_level']->getUrl() }}/index.html" class="{{ $page->title=='A1' ? 'border-4 border-red-800' : 'border border-gray-200' }} text-center w-1/2 py-5 px-5 me-2 text-xl mb-2 font-medium text-gray-900 focus:outline-none bg-white rounded-lg  hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">A1</a>
        <a href="{{ $levels['A2_level']->getUrl() }}/index.html" class="{{ $page->title=='A2' ? 'border-4 border-red-800' : 'border border-gray-200' }} text-center w-1/2 py-5 px-5 me-2 mb-2 text-xl font-medium text-gray-900 focus:outline-none bg-white rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">A2</a>
    </div>
    <div class="flex flex-col">
    @foreach ($levelLessons as $lesson)
        <div class="border my-1 hover:border-red-500 border-gray-200 rounded-lg p-4 bg-white">
            <div class="flex items-center mb-2">
                <span class="w-6 h-6 rounded-full flex items-center justify-center bg-white text-gray-700 text-lg font-bold border-gray-900 border-2 mr-2">{{ $lesson->lessonOrder }}</span>
                <a href="{{ $lesson->getUrl() }}/index.html" class="text-xl md:text-2xl hover:underline font-bold font-['Inter']"> 
                    {{ $lesson->title }}
                </a>
            </div>
            <img class="w-full mb-4" src="{{ $page->getBaseUrl() }}/assets/images/dummy_banner2.png" alt="Lesson banner"/>
            <div class="hidden md:grid grid-cols-2 md:grid-cols-4 gap-4 font-['Inter']">
                <div>
                    <a href="{{ $lesson->getUrl() }}/index.html" class="text-lg md:text-xl hover:font-bold block mb-1">
                        Бейне сабақ
                    </a>
                    <div class="discrete_progress_bar" style="background-position:{{ -100 + (4-$lesson->videoLesson)*25 }}%"></div>
                </div>
                <div>
                    <a href="{{ $videos[$lesson->videoId]->getUrl() }}/index.html" class="text-lg md:text-xl hover:font-bold block mb-1">Бейне жазба</a>
                    <div class="discrete_progress_bar" style="background-position:{{ -100 + (4-$lesson->videoRecord)*25 }}%"></div>
                </div>
                <div>
                    <a href="{{$texts[$lesson->textId]->getUrl() }}/index.html" class="text-lg md:text-xl hover:font-bold block mb-1">Мәтін</a>
                    <div class="discrete_progress_bar" style="background-position:{{ -100 + (4-$lesson->text)*25 }}%"></div>
                </div>
                <div>
                    <a href="{{ $songs[$lesson->songId]->getUrl() }}/index.html" class="text-lg md:text-xl hover:font-bold block mb-1">Ән айту</a>
                    <div class="discrete_progress_bar" style="background-position:{{ -100 + (4-$lesson->song)*25 }}%"></div>
                </div>
            </div>
        </div>
        
    @endforeach
    </div>
</div>
<script>
    document.getElementById('levelSelect').addEventListener('change', function() {
        window.location.href = this.value;
    });
</script>
@endsection
