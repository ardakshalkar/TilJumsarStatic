@extends('_layouts.main')

@section('body')

<h1 class="p-5 text-2xl font-bold font-['Inter']">Мәтіндер</h1>

<div class="flex flex-row flex-wrap justify-evenly">
@foreach ($texts as $text)
    <div class="max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-1/2 m-5">    
        <div class="rounder-sm border-gray-200">{{ $text->level }}</div>
        <img src="{{ $page->getBaseUrl() }}/assets/images/{{ $text->image }}"/>
        <h1 class="p-5 text-neutral-700 text-2xl font-bold font-['Inter']">{{ $text->title }}</h1>
        <a href="{{ $page->getBaseUrl() }}/texts/1-texts/index.html" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Бастау</a>
    </div>
@endforeach
</div>
@endsection