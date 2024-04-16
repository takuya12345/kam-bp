<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        
        // Auth::attemptメソッドでログイン情報を精査
        if (Auth::attempt($credentials)) {
            // セッションを再生成する処理（セキュリティ対策）
            logger($request->session()->regenerate());
            
            // ミドルウェアに対応したリダイレクト
            return redirect()->intended('admin/game/index');
        }

        // ログイン情報が正しくない場合のみ実行される
        return back()->withErrors([
            'email' => 'メールアドレスが正しくありません',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        // ログアウトの処理
        Auth::logout();
        // 現在使っているセッションの無効化（セキュリティ対策のため）
        $request->session()->invalidate();
        // セッションの無効化を再生成（セキュリティ対策のため）
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
