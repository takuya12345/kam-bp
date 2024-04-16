@extends('layouts.default')
@section('title', '出欠登録')

@section('content')
    <form action="{{ route('attendance.store') }}" method="POST" class="text-center m-8">
    @csrf
        <div class="text-center">
            <input type="hidden" name="game_no" value="{{ $game_no }}">
            <div class="mt-2">
                <label>
                    <p class="text-center">名前</p>
                    <input type="text" class="border border-gray-800 rounded" name="name" value="{{ old('name') }}">
                    {{-- <input type="text" class="border border-gray-800 rounded" name="name" v-model="newName" value="{{ newName }}"> --}}
                </label>
            </div>
            <div class="mt-2">
                <label>
                    <p class="text-center">出欠登録</p>
                    <select name="attendance" class="border border-gray-800 rounded p-1">
                        <option value="">選択してください</option>
                        <option value="○">○</option>
                        <option value="△">△</option>
                        <option value="×">×</option>
                    </select>
                </label>
            </div>
            <div class="mt-2">
                <label>
                    <p class="text-center">コメント</p>
                    <input type="text" class="border border-gray-800 rounded" name="comment">
                </label>
            </div>
            <button type="submit" class="bg-blue-800 text-white border rounded p-1 mt-2">登録</button>
        </div>
    </form>
    <div class="grid grid-cols-5 border-2 border-blue-600 text-center mt-4 mx-40">
        <div class="flex justify-center items-center font-bold border-2 border-blue-600 p-4">名前</div>
        <div class="flex justify-center items-center font-bold border-2 border-blue-600 p-4">出欠</div>
        <div class="flex justify-center items-center font-bold border-2 border-blue-600 p-4">コメント</div>
        <div class="flex justify-center items-center font-bold border-2 border-blue-600 p-4">編集</div>
        <div class="flex justify-center items-center font-bold border-2 border-blue-600 p-4">削除</div>
        @foreach ($attendance_index as $index)
            <div class="flex justify-center items-center border-2 border-blue-600 p-4">
                {!! nl2br(e($index->name)) !!}
            </div>
            <div class="flex justify-center items-center border-2 border-blue-600 p-4">
                {!! nl2br(e($index->attendance)) !!}
            </div>
            <div class="flex justify-center items-center border-2 border-blue-600 p-4">
                {!! nl2br(e($index->comment)) !!}
            </div>
            <div class="flex justify-center items-center border-2 border-blue-600 p-4">
                <button type="submit" class="bg-blue-500 text-white border rounded p-1">
                    <a href="{{ route('attendance.edit', ['player_no' => $index->id]) }}">編集</a>
                </button>
            </div>
            <div class="flex justify-center items-center border-2 border-blue-600 p-4">
                <form action="{{ route('attendance.delete', ['player_no' => $index->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="game_no" value="{{ $index->game_no }}">
                    <button type="submit" class="bg-red-500 text-white border rounded p-1">
                        削除
                    </button>
                </form>
            </div>
        @endforeach
    </div>
@endsection