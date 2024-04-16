@extends('layouts.default')
@section('title', '試合情報編集')

@section('content')
    <form action="{{ route('admin.game.update') }}" method="POST" class="text-center">
        @csrf
        <input type="hidden" name="game_id" value="{{ $edit_game_info->id }}">
        <div class="m-2">
            <label>
                <span class="inline-block w-1/4">日時</span>
                <input type="date" name="date" value="{{ $edit_game_info->date }}">
            </label>
        </div>
        <div class="m-2">
            <label>
                <span class="inline-block w-1/4">試合会場</span>
                <input type="text" class="border border-gray-800 rounded" name="place" value="{{ $edit_game_info->place }}">
            </label>
        </div>
        <div class="m-2">
            <label>
                <span class="inline-block w-1/4">試合形式</span>
                <input type="text" class="border border-gray-800 rounded" name="match_format" placeholder="練習試合など" value="{{ $edit_game_info->match_format }}">
            </label>
        </div>
        <div class="m-2">
            <label>
                <span class="inline-block w-1/4">対戦相手</span>
                <input type="opponent" class="border border-gray-800 rounded" name="game_information" value="{{ $edit_game_info->game_information }}">
            </label>
        </div>
        <div class="m-2">
            <label>
                <span class="inline-block w-1/4">主催</span>
                <input type="text" class="border border-gray-800 rounded" name="organizer" value="{{ $edit_game_info->organizer }}">
            </label>
        </div>
        <button type="submit" class="bg-blue-500 text-white border rounded p-1">登録</button>
    </form>
    <div class="text-center p-1">
        <a href="{{ route('admin.game.index') }}" class="text-center  p-1 mt-2">戻る</a>
    </div>
@endsection