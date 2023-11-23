<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'name' => 'required'|'string'|'max:255',
            'email' => 'required'|'string'|'email'|'max:255'|'unique:users',
            'password' => 'required'|'string'|'min:8'|'confirmed',
            'password_confirm' => 'required'|'string'|'min:8'|'confirmed',
        ];
    }

    /**
     * エラーメッセージ
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'email.required' => 'Eメールアドレスを入力してください',
            'password.required' => 'パスワードを入力してください',
            'password_confirm.required' => '確認用のパスワードを入力してください',
        ];
    }
}
