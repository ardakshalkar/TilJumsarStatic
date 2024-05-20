@extends('_layouts.main')

@section('body')
<h1 class="p-5 text-2xl font-bold font-['Inter']">Бейне сабақ:  </h1>
<div class="flex">
    <div class="w-full m-5 content-center">
        <iframe class="mx-auto" width="840" height="450" src="{{ $videos['1_video']->youtube }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>
@endsection
