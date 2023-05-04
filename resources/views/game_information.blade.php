@extends('layouts.default')
@section('title', 'スケジュール')

@section('content')
    <div class="grid grid-cols-4 border-2 border-red-600 text-center m-4">
        <div class="flex justify-center items-center border-2 border-red-600 p-4">日時</div>
        <div class="flex justify-center items-center border-2 border-red-600 p-4">場所</div>
        <div class="flex justify-center items-center border-2 border-red-600 p-4">内容</div>
        <div class="flex justify-center items-center border-2 border-red-600 p-4">主催</div>
        @foreach ($game_information as $information)
            <div class="flex justify-center items-center border-2 border-red-600 p-4">
                {!! nl2br(e($information['date'])) !!}
            </div>
            <div class="flex justify-center items-center border-2 border-red-600 p-4">
                <a href="{{ route('attendance') }}" class="underline">
                    {!! nl2br(e($information['place'])) !!}
                </a>
            </div>
            <div class="flex justify-center items-center border-2 border-red-600 p-4">
                {!! nl2br(e($information['game_information'])) !!}
            </div>
            <div class="flex justify-center items-center border-2 border-red-600 p-4">
                {!! nl2br(e($information['organizer'])) !!}
            </div>
        @endforeach
    </div>
@endsection
