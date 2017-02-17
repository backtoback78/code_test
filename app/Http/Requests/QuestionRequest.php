<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'title' => 'required|max:100',
            'abstract' => 'max:100',
            'content' => 'max:200',
            'category_id' =>'integer',          
            'published_at' => 'in:on',
            'status' => 'in:on',
            
        ];
    }
}
