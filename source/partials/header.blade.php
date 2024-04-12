<div class="flex flex-row">
  <div class="w-3/4">
    <a href="{{ $page->getBaseUrl() }}/index.html">
      <img src="{{ $page->getBaseUrl() }}/assets/images/logo.svg"/>
    </a>
  </div>
  <div class="w-1/4">
    <div class="w-[58px] h-10 rounded-lg justify-start items-start inline-flex">
      <div class="px-4 py-2.5 bg-orange-300 bg-opacity-0 rounded-lg shadow border border-slate-600 justify-center items-center gap-2 flex">
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" 
        class="text-black text-sm font-semibold font-['Inter'] leading-tight">Қаз</button>
      </div>
    </div>
    <div class=" h-10 rounded-lg justify-start items-start inline-flex">
      <div class="px-4 py-2.5 bg-slate-600 rounded-lg shadow border border-slate-600 justify-center items-center gap-2 flex">
        <div class="text-white text-sm font-semibold font-['Inter'] leading-tight">Олжабек А.</div>
      </div>
    </div>
  </div>
</div>

<!--
<button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown button <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>
-->
<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Қаз</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Eng</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Рус</a>
      </li>
    </ul>
</div>
