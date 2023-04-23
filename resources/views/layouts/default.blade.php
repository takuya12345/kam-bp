<!DOCTYPE html>
<html lang="ja">
<head>
    <title>@yield('title', 'カムB.P')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="/css/tailwind/tailwind.min.css">
    <script src="/js/main.js"></script>
</head>
<body class="antialiased bg-body text-body font-body bg-gray-800 text-white max-w-screen-xl m-2">
    <header>
        <div class="w-full flex justify-center">
            <img src="{{ asset('./images/kam.jpeg') }}">
        </div>
    </header>
    @yield('content')
</body>