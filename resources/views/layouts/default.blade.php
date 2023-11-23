<!DOCTYPE html>
<html lang="ja">
<head>
    <title>@yield('title', 'カムB.P')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="/css/tailwind/tailwind.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-body text-body font-body max-w-screen-xl m-2">
    <header>
        <div class="w-full flex justify-center">
            <a href="{{ route('kam.bp') }}">
                <img src="{{ asset('./images/kam.jpeg') }}">
            </a>
        </div>
    </header>
    @yield('content')
</body>