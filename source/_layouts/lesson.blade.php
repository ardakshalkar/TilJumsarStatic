@extends('_layouts.main')

@section('body')

<div class="p-4 mt-4 flex items-center rounded-3xl bg-gray-200">
    <a href="{{ $page->getBaseUrl() }}/index.html" class="text-xl ms-1 text-blue-600 underline">
        Басты бет
    </a>
    <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
    <a href="{{ $levels[$page->level."_level"]->getUrl() }}/index.html" class="text-xl text-blue-600 underline">
        {{ $page->level }}
    </a>
    <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        
    <span class="text-xl">
        {{ $page->title }}
    </span>
    
</div>
<h1 class="p-5 text-2xl font-bold font-['Inter'] text-center">Бейне сабақ:  {{ $page->title }}</h1>
<div class="flex flex-col">
    <div class="w-full m-5 content-center">
        <!-- width="840" -->
        <iframe class="mx-auto w-full lg:w-1/2 h-96"  src="{{ $page->youtube }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    </div>
    <div class="w-full m-5">
        <div class="flex flex-col md:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-4">
            <a href="{{ $texts[$page->textId]->getUrl() }}/index.html" class="w-full md:w-auto text-2xl hover:font-bold bg-gray-100 px-4 py-2 rounded-lg">📜Мәтін</a>
            <a href="{{ $songs[$page->songId]->getUrl() }}/index.html" class="w-full md:w-auto text-2xl hover:font-bold bg-gray-100 px-4 py-2 rounded-lg">🎶Караоке</a>
            <a href="{{ $videos[$page->videoId]->getUrl() }}/index.html" class="w-full md:w-auto text-2xl hover:font-bold bg-gray-100 px-4 py-2 rounded-lg">📹Бейне жазба</a> 
        </div>
    </div>
</div>
@endsection
