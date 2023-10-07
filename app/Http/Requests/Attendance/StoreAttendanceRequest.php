<?php

namespace App\Http\Requests\Attendance;

use Illuminate\Foundation\Http\FormRequest;

class StoreAttendanceRequest extends FormRequest
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
            'name' => ['required', 'max:255'],
            'attendance' => ['required'],
            'comment' => ['max:50'],
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
            'attendance.required' => '出欠内容を入力してください',
        ];
    }
}
