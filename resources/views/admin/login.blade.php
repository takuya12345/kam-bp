@extends('layouts.default')
@section('title', '管理者ログイン')

@section('content')
    <div class="text-center m-8">
        <h1 class="">管理者ログイン</h1>
        @if($errors->any())
            <div class="">
                <p class="text-red-400">入力内容に誤りがあります</p>
            </div>
        @endif
    </div>
    <form action="{{ route('admin.login') }}" method="POST" class="text-center">
        @csrf
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
        <button type="submit" class="bg-gray-800 text-white border rounded p-1">ログイン</button>
    </form>
@endsection