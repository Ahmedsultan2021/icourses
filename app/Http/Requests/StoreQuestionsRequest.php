<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionsRequest extends FormRequest
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
            'title' => 'required|string|min:1',
            'mark' => 'required|numeric',
            'type' => 'required|string|in:mcq,true_false,essay',
            'section_id' => 'required|integer',
            'answers' => 'required_if:type,mcq',
            'answers.*' => 'required',
            'correct_answer' => 'required_if:type,mcq,true_false',
        ];
    }
}
