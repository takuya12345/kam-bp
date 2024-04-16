@extends('layouts.default')
@section('title', '試合登録')

@section('content')
    <form action="{{ route('admin.game.store') }}" method="POST" class="text-center">
        @csrf
        <div class="m-2">
            <label>
                <span class="inline-block w-1/4">日時</span>
                <input type="date" name="date" value="{{ old('date') }}">
            </label>
        </div>
        <div class="m-2">
            <label>
                <span class="inline-block w-1/4">試合会場</span>
                <input type="text" class="border border-gray-800 rounded" name="place" value="{{ old('place') }}">
            </label>
        </div>
        <div class="m-2">
            <label>
                <span class="inline-block w-1/4">大会/練習試合</span>
                <input type="text" class="border border-gray-800 rounded" name="match_format" value="{{ old('match_format') }}">
            </label>
        </div>
        <div class="m-2">
            <label>
                <span class="inline-block w-1/4">対戦相手</span>
                <input type="opponent" class="border border-gray-800 rounded" name="game_information" value="{{ old('game_information') }}">
            </label>
        </div>
        <div class="m-2">
            <label>
                <span class="inline-block w-1/4">主催</span>
                <input type="text" class="border border-gray-800 rounded" name="organizer" value="{{ old('organizer') }}">
            </label>
        </div>
        <button type="submit" class="bg-gray-800 text-white border rounded p-1">登録</button>
    </form>
@endsection