<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    </head>
    <body class="text-gray-900 font-sans antialiased flex">
        <div class="flex flex-col min-h-screen sm:container">
            <div class="">
                <div class="container-sm sm:mx-auto max-w-screen-xl pt-5">
                    @include('partials.header')
                </div>
            </div>
            <div class="flex-grow flex">
                <div class="max-w-screen-xl w-screen mx-auto">
                    @yield('body')
                </div>
            </div>
            <div class="flex-shrink bg-gray-700">
                <div class="max-w-screen-xl mx-auto">
                    @include('partials.footer')
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>
</html>
