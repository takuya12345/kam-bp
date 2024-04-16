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
    <main class="py-4 px-6">
        @if ($errors->has('name'))
            <div class="mb-4 text-left">
                <div
                    class="pl-6 pr-16 py-4 bg-white border-l-4 border-red-500 shadow-md rounded-r-lg inline-block ml-auto">
                    <div class="flex items-center">
                        <p class="error">{{ $errors->first('name') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if ($errors->has('email'))
            <div class="mb-4 text-left">
                <div
                    class="pl-6 pr-16 py-4 bg-white border-l-4 border-red-500 shadow-md rounded-r-lg inline-block ml-auto">
                    <div class="flex items-center">
                        <p class="error">{{ $errors->first('email') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if ($errors->has('password'))
            <div class="mb-4 text-left">
                <div
                    class="pl-6 pr-16 py-4 bg-white border-l-4 border-red-500 shadow-md rounded-r-lg inline-block ml-auto">
                    <div class="flex items-center">
                        <p class="error">{{ $errors->first('password') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if ($errors->has('password_confirm'))
            <div class="mb-4 text-left">
                <div
                    class="pl-6 pr-16 py-4 bg-white border-l-4 border-red-500 shadow-md rounded-r-lg inline-block ml-auto">
                    <div class="flex items-center">
                        <p class="error">{{ $errors->first('password_confirm') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if ($errors->has('attendance'))
            <div class="mb-4 text-left">
                <div
                    class="pl-6 pr-16 py-4 bg-white border-l-4 border-red-500 shadow-md rounded-r-lg inline-block ml-auto">
                    <div class="flex items-center">
                        <p class="error">{{ $errors->first('attendance') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if ($errors->has('date'))
            <div class="mb-4 text-left">
                <div
                    class="pl-6 pr-16 py-4 bg-white border-l-4 border-red-500 shadow-md rounded-r-lg inline-block ml-auto">
                    <div class="flex items-center">
                        <p class="error">{{ $errors->first('date') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if(session()->has('success'))
            <!-- ▼▼▼▼登録完了メッセージ(全ページで共通)▼▼▼▼　-->
                <div class="mb-4 text-left">
                    <div
                        class="pl-6 pr-16 py-4 bg-white border-l-4 border-blue-500 shadow-md rounded-r-lg inline-block ml-auto">
                        <div class="flex items-center">
                            <p class="text-blue-800 font-medium">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
                <!-- ▲▲▲▲登録完了メッセージ▲▲▲▲　-->
        @endif
    @yield('content')
</body>