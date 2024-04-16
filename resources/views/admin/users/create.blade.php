@extends('layouts.default')
@section('title', 'ログイン')

@section('content')
@vite('resources/js/app.js')
    <form action="{{ route('admin.users.store') }}" method="POST" class="text-center">
        @csrf
        <div class="m-2">
            <label>
                <span class="inline-block w-1/4">名前</span>
                <input type="text" class="border border-gray-800 rounded" name="name" value="{{ old('name') }}">
            </label>
        </div>
        <div class="m-2">
            <label>
                <span class="inline-block w-1/4">メールアドレス</span>
                <input type="email" class="border border-gray-800 rounded" name="email" value="{{ old('email') }}">
            </label>
        </div>
        <div class="m-2">
            <label>
                <span class="inline-block w-1/4">パスワード</span>
                <input type="password" class="border border-gray-800 rounded" name="password" value="{{ old('password') }}">
            </label>
        </div>
        <div class="m-2">
            <label>
                <span class="inline-block w-1/4">パスワード（確認用）</span>
                <input type="password" class="border border-gray-800 rounded" name="password_confirmation">
            </label>
        </div>
        <button type="submit" class="bg-gray-800 text-white border rounded p-1">登録</button>
    </form>
@endsection