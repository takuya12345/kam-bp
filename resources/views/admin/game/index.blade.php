@extends('layouts.default')
@section('title', '試合予定')

@section('content')
    <div class="m-5 text-center">
        <button type="button"
            class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-900">
            <a href="{{ route('admin.game.create') }}" class="font-sans text-base p-2">
                試合登録
            </a>
        </button>
    </div>
    <div class="m-5 text-center">
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit"
            class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                <span class="font-sans text-base p-2">ログアウト</span>
            </button>
        </form>
    </div>
    <div class="grid grid-cols-7 border-2 border-blue-600 text-center mt-4 mx-40">
        <div class="flex justify-center items-center border-2 border-blue-600 p-4">日時</div>
        <div class="flex justify-center items-center border-2 border-blue-600 p-4">場所</div>
        <div class="flex justify-center items-center border-2 border-blue-600 p-4">形式</div>
        <div class="flex justify-center items-center border-2 border-blue-600 p-4">内容</div>
        <div class="flex justify-center items-center border-2 border-blue-600 p-4">主催</div>
        <div class="flex justify-center items-center border-2 border-blue-600 p-4">編集</div>
        <div class="flex justify-center items-center border-2 border-blue-600 p-4">削除</div>
        @foreach ($game_information as $information)
            <div class="flex justify-center items-center border-2 border-blue-600 p-4">
                {!! nl2br(e($information['date'])) !!}
            </div>
            <div class="flex justify-center items-center border-2 border-blue-600 p-4">
                <a href="{{ route('attendance.index', ['game_no' => $information['id']]) }}" class="underline">
                    {!! nl2br(e($information['place'])) !!}
                </a>
            </div>
            <div class="flex justify-center items-center border-2 border-blue-600 p-4">
                {!! nl2br(e($information['match_format'])) !!}
            </div>
            <div class="flex justify-center items-center border-2 border-blue-600 p-4">
                {!! nl2br(e($information['game_information'])) !!}
            </div>
            <div class="flex justify-center items-center border-2 border-blue-600 p-4">
                {!! nl2br(e($information['organizer'])) !!}
            </div>
            <div class="flex justify-center items-center border-2 border-blue-600 p-4">
                <button type="submit" class="bg-blue-500 text-white border rounded p-1">
                    <a href="{{ route('admin.game.edit', ['game_no' => $information->id]) }}">編集</a>
                </button>
            </div>
            <div class="flex justify-center items-center border-2 border-blue-600 p-4">
                <form action="{{ route('admin.game.delete', ['game_no' => $information->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="game_no" value="{{ $information->id }}">
                    <button type="submit" class="bg-red-500 text-white border rounded p-1">
                        削除
                    </button>
                </form>
            </div>
        @endforeach
    </div>
@endsection