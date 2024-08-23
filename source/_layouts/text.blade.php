@extends('_layouts.main')

@section('body')
<div class="p-4 mt-4 flex items-center rounded-3xl bg-gray-200">
    <a href="{{ $page->getBaseUrl() }}/index.html" class="text-xl ms-1 text-blue-600 underline">
        Басты бет
    </a>
    <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>   
    <a href="{{ $levels[$lessons[$page->lessonId]->level."_level"]->getUrl() }}/index.html" class="text-xl text-blue-600 underline">
    {{ $lessons[$page->lessonId]->level }}
    </a>
    <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        
    <a href="{{ $lessons[$page->lessonId]->getUrl() }}/index.html" class="text-xl text-blue-600 underline">
        {{ $lessons[$page->lessonId]->title }}
    </a>
    <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
    <span class="text-xl">Мәтін: {{ $page->title }}</span>
</div>
<h1 class="p-5 text-2xl font-bold font-['Inter'] text-center">Мәтін:  {{ $page->title }}</h1>
<div class="flex">
    <div class="w-1/2 m-5 content-center">
        <iframe class="mx-auto" width="540" height="350" src="{{ $page->youtube }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <div class="w-1/2">
        @yield('content')
    </div>
</div>
@endsection