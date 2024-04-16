<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'date' => 'required|string',
            'place' => 'max:255',
            'match_format' => 'max:255',
            'game_information' => 'max:225',
            'organizer' => 'max:225',
            // 'comment' => 'max:225',
        ];
    }
    
    /**
     * エラーメッセージ
     * @return array
     */
    public function messages()
    {
        return [
            'date.required' => '日時を入力してください',
            'place.max' => '試合会場は225文字以下で入力してください',
            'match_format.max' => '試合形式は225文字以下で入力してください',
            'game_information.max' => '対戦相手は225文字以下で入力してください',
            'organizer.max' => '主催は225文字以下で入力してください',
            // 'comment.max' => 'コメントは225文字以下で入力してください',
        ];
    }
}
