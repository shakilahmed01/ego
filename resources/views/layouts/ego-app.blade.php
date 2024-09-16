<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $pageTitle }}</title>
    <link rel="shortcut icon" type="image/png"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpCpNz-irG5IbwGxK6R7aIddZsHr1b6dqOXw&s">
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="Welcome to Ego Colored Contact Lens Official Store">
    <meta property="og:image"
        content="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpCpNz-irG5IbwGxK6R7aIddZsHr1b6dqOXw&s">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    @stack('style')
    @include('ego.include.css')
</head>

<body>
    @include('ego.include.loader')
    @include('ego.include.topbar')
    @if (!Route::is('ego.index'))
        @include('ego.include.header')
    @endif

    <main>
        @include('partials.notify')
        @yield('content')
    </main>
    @include('ego.include.footer')
    @include('ego.include.chatbot')
    @include('ego.include.js')
    @stack('script')
</body>

</html>
