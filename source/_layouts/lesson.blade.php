@extends('_layouts.main')

@section('body')

<div class="p-4 mt-4 flex items-center rounded-3xl bg-gray-200">
    <a href="{{ $page->getBaseUrl() }}/index.html" class="text-xl ms-1 text-blue-600 underline">
    <svg class="inline md:hidden" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 12 2 A 1 1 0 0 0 11.289062 2.296875 L 1.203125 11.097656 A 0.5 0.5 0 0 0 1 11.5 A 0.5 0.5 0 0 0 1.5 12 L 4 12 L 4 20 C 4 20.552 4.448 21 5 21 L 9 21 C 9.552 21 10 20.552 10 20 L 10 14 L 14 14 L 14 20 C 14 20.552 14.448 21 15 21 L 19 21 C 19.552 21 20 20.552 20 20 L 20 12 L 22.5 12 A 0.5 0.5 0 0 0 23 11.5 A 0.5 0.5 0 0 0 22.796875 11.097656 L 12.716797 2.3027344 A 1 1 0 0 0 12.710938 2.296875 A 1 1 0 0 0 12 2 z"/></svg>
    <span class="hidden md:inline">Басты бет</span>
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
