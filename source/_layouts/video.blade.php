@extends('_layouts.main')

@section('body')
<h1 class="text-xl my-3 font-bold">{{ $page->title }}</h1>
<iframe width="560" height="315" src="{{ $page->youtube }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
@endsection