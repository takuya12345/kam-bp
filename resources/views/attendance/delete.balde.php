@extends('layouts.default')
@section('title', '出欠登録削除')

@section('content')
    <form action="{{ route('attendance.update') }}" method="POST" class="text-center mt-8">
        @csrf
        <input type="hidden" name="player_id" value="{{ $attendance_player->id }}">
        <input type="hidden" name="game_no" value="{{ $attendance_player->game_no }}">
        <div class="mt-2">
            <label>
                <p class="text-center">名前</p>
                <input type="text" class="border border-gray-800 rounded" name="name" value="{{ $attendance_player->name }}">
                {{-- <input type="text" class="border border-gray-800 rounded" name="name" v-model="newName" value="{{ newName }}"> --}}
            </label>
        </div>
        <div class="mt-2">
            <label>
                <p class="text-center">出欠登録：現在
                    <span class="text-red-500">{{ $attendance_player->attendance }}</span>
                </p>
                <select name="attendance" class="border border-gray-800 rounded p-1">
                    <option value="">変更する場合は、選択してください</option>
                    <option>○</option>
                    <option>△</option>
                    <option>×</option>
                </select>
            </label>
        </div>
        <div class="mt-2">
            <label>
                <p class="text-center">コメント</p>
                <input type="text" class="border border-gray-800 rounded" name="comment" value="{{ $attendance_player->comment }}">
            </label>
        </div>
        <button type="submit" class="bg-blue-800 text-white border rounded p-1 mt-2">登録</button>
    </form>
    <div class="text-center">
        <a href="{{ route('attendance.index', ['game_no' => $attendance_player->game_no]) }}" class="text-center  p-1 mt-2">戻る</a>
    </div>
    <div id="app"></div>
@endsection