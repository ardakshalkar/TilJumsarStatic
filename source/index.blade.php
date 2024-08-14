@extends('_layouts.main')

@section('body')
<div class="m-10 relative bg-contain bg-no-repeat h-[601px] bg-[url('assets/images/hero.png')]">
    <div class="absolute top-0 right-0">
        <div class="text-[58px] font-bold pt-8">
            <span>Қазақ тілін</span><br/>
            <span class="text-orange-400">til-jumsar.kz</span><br/>
            <span>арқылы үйреніңіз</span>
        </div>
        <div class="w-96 h-14 flex flex-row mt-24 justify-around">
            <div class="">
                <span class="text-gray-700 text-5xl font-bold font-['Inter'] leading-10">350</span><span class="text-gray-700 text-5xl font-bold font-['Sen'] leading-10"> </span><span class="text-gray-700 text-lg font-semibold font-['Inter'] leading-loose">Студент</span>
            </div>
            <div class="">
                <span class="text-gray-700 text-5xl font-bold font-['Inter'] leading-10">70+ </span><span class="text-gray-700 text-lg font-semibold font-['Inter'] leading-loose">Cабақ</span>
            </div>
        </div>
        <div>
            <a href="{{ $page->getBaseUrl() }}/levels/index.html"
            class="inline-block text-center rounded bg-slate-600 text-white px-6 pb-4 pt-4 mt-10 w-[400px]">
            Бастау
            </a>
        </div>
    </div>
</div>

<!--<div class="w-[1284px] h-[601px] relative">
  <div class="w-[917px] h-[601px] left-0 top-0 absolute">
    <div class="w-[917px] h-[601px] left-0 top-0 absolute">
      <img class=" left-[36.27px] top-0 absolute" src="assets/images/hero.png" />
    </div>
    <div class="origin-top-left w-[253px] h-[222px] left-[587px] top-[347px] absolute">
      <div class="w-[253px] h-[222px] left-[-253px] top-0 absolute bg-white rounded-xl shadow"></div>
      <div class="w-[154px] h-12 left-[-209px] top-[72px] absolute">
        <div class="w-12 h-12 left-0 top-0 absolute">
          <div class="w-12 h-12 left-0 top-0 absolute bg-purple-100 rounded-full"></div>
          <div class="left-[14px] top-[9px] absolute text-fuchsia-700 text-lg font-semibold font-['Poppins'] leading-[30px]">A1</div>
        </div>
        <div class="left-[64px] top-[9px] absolute text-gray-700 text-lg font-semibold font-['Inter'] leading-[30px]">A1 деңгей</div>
      </div>
      <div class="w-[157px] h-12 left-[-209px] top-[142px] absolute">
        <div class="w-12 h-12 left-0 top-0 absolute">
          <div class="w-12 h-12 left-0 top-0 absolute bg-indigo-100 rounded-full"></div>
          <div class="left-[12px] top-[9px] absolute text-blue-500 text-lg font-semibold font-['Poppins'] leading-[30px]">A2</div>
        </div>
        <div class="left-[64px] top-[9px] absolute text-gray-700 text-lg font-semibold font-['Inter'] leading-[30px]">A2 деңгей</div>
      </div>
      <div class="left-[-178px] top-[22px] absolute text-gray-700 text-lg font-extrabold font-['Inter'] leading-[30px]">Деңгейлер</div>
    </div>
  </div>
  <div class="w-[547px] h-[423px] left-[737px] top-[21px] absolute">
    <div class="w-[354px] h-[54px] left-0 top-[369px] absolute">
    <div class="w-96 h-14 relative">
        <div class="left-0 top-0 absolute">
            <span class="text-gray-700 text-5xl font-bold font-['Inter'] leading-10">350</span><span class="text-gray-700 text-5xl font-bold font-['Sen'] leading-10"> </span><span class="text-gray-700 text-lg font-semibold font-['Inter'] leading-loose">Студент</span>
        </div>
        <div class="left-[201px] top-0 absolute">
            <span class="text-gray-700 text-5xl font-bold font-['Inter'] leading-10">70+ </span><span class="text-gray-700 text-lg font-semibold font-['Inter'] leading-loose">Cабақ</span></div>
        </div>
    </div>
    <div class="text-[58px] font-bold">
        <span>Қазақ тілін</span><br/>
        <span class="text-orange-400">til-jumsar.kz</span><br/>
        <span>арқылы үйреніңіз</span>
    </div>
  </div>
</div>
-->
<div class="py-10">
    <div class="my-5 self-stretch text-center text-gray-700 text-4xl font-semibold font-['Inter'] leading-10">Біз ұсынатын қазақ тілін үйрену тәсілдері</div>
    <div class="my-10 flex flex-row justify-around">
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Интерактивтілік</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Геймификация элементтері бар бейнероликтер, аудиофайлдар</p>
        </div>
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Қызық</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Ойын элементтері бар сабақтар, бейне сабақтар, фото және медиа</p>
        </div>
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Дербестік</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Тапсырмалардың өтуіне қарай сізге ұпай беріледі</p>
        </div>
    </div>
</div>
<div class="w-96 h-96 relative">
  <div class="w-96 left-[494px] top-[113px] absolute text-gray-700 text-2xl font-normal font-['Inter'] leading-10">Спасибо порталу til-jumsar.kz! Теперь я могу свободно разговаривать на казахском. Ну, не сочиняю стихи, но уже могу говорить на бытовом уровне</div>
  <div class="w-32 h-40 left-[135px] top-[96px] absolute">
    <div class="left-0 top-[128px] absolute text-zinc-800 text-sm font-normal font-['Inter'] leading-relaxed">Инженер</div>
    <div class="left-0 top-[90px] absolute text-gray-700 text-2xl font-bold font-['Inter'] leading-loose">Peter Moor</div>
    <img class="w-16 h-16 left-0 top-0 absolute rounded-full" src="https://via.placeholder.com/72x72" />
  </div>
</div>
@endsection
