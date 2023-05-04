@extends('layouts.default')
@section('title', 'カムB.P')

@section('content')

    <div class="m-5 text-center">
        <button type="button"
            class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
            <a href="{{ route('game_information') }}" class="font-sans text-base p-2">
                スケジュール
            </a>
        </button>
    </div>
    <div class="m-5 text-center">
        <button type="button"
            class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-900">
            <a href="{{ route('login') }}" class="font-sans text-base p-2">
                ログイン
            </a>
        </button>
    </div>
@endsection
