@extends('_layouts.main')

@section('body')
<h1 class="p-5 text-2xl font-bold font-['Inter']">Караоке</h1>
<h1 class="font-['Inter'] text-center text-2xl leading-10">{{ $page->title }}</h1>
<h1 class="text-xl text-gray text-center leading-10">{{ $page->author }}</h1>

<audio controls class="w-full">
  <source src="horse.ogg" type="audio/ogg">
  <source src="{{ $page->getBaseUrl() }}/assets/audio/sample.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

<div class="columns-2 text-center leading-8 p-4">
    <pre>
Ол кезде бәрі тәтті еді,
ауылда,ауылда,
Көшенің заңы қатты еді,
Ініге, бауырға.
Жиналушы едік топ болып,
далаға, далаға,
Aл қазір кеттік жоқ болып,
қалаға, қалаға.
Уақыттар зулап жорғадай,
Көшеде қалған жолдар-ай,
Кешегі бұзық бозбала,
Әке болғаны-ай,
Балалық шаққа шегінсек,
Ғашық боп тағы келуші ек,
Кешегі сұлу қарындас,
Бүгін келіншек.
</pre>

</div>

<div class="flex justify-center">
<button type="button" class="text-white bg-[#2557D6] hover:bg-[#2557D6]/90 focus:ring-4 focus:ring-[#2557D6]/50 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#2557D6]/50 me-2 mb-2">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
  <path fill-rule="evenodd" d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 0 0 3 3h.27l-.155 1.705A1.875 1.875 0 0 0 7.232 22.5h9.536a1.875 1.875 0 0 0 1.867-2.045l-.155-1.705h.27a3 3 0 0 0 3-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0 0 18 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM16.5 6.205v-2.83A.375.375 0 0 0 16.125 3h-8.25a.375.375 0 0 0-.375.375v2.83a49.353 49.353 0 0 1 9 0Zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 0 1-.374.409H7.232a.375.375 0 0 1-.374-.409l.526-5.784a.373.373 0 0 1 .333-.337 41.741 41.741 0 0 1 8.566 0Zm.967-3.97a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H18a.75.75 0 0 1-.75-.75V10.5ZM15 9.75a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V10.5a.75.75 0 0 0-.75-.75H15Z" clip-rule="evenodd" />
</svg>

Шығару
</button>
</div>
@endsection