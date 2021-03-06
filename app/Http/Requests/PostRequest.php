<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
         'name' => 'required|max:50',
         'tel' => 'max:11',
         'email' => 'required|email',
         'gender' => 'required|in:1,2',
         'content' => 'required|max:500'
        ];
    }
    
    public function messages()
    {
     return [
         'name.required' => '氏名を入力してください。',
         'name.max' => '氏名は指定文字数以内で入力してください。',
         'tel.max' => '電話番号は11桁以内で入力してください。',
         'email.required' => 'メールアドレスを入力してください。',
         'email.email' => 'メールアドレスは正しいメールアドレス形式で入力してください。',
         'gender.required' => '性別を選択してください。',
         'gender.in' => '性別を正しく選択してください。',
         'content.max' => '内容は指定文字数以内で入力してください。',
         'content.required' => '内容は必ず入力してください。',
     ];
 }
}
