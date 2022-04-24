<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'title' => ['min:3','unique:posts'],
            'description' => ['required',' min:10 '],
            'featured' => 'mimes:jpg,png'
            ];
    
    }

    public function messages(){
        return  [
            'title.required' => 'Title field is required',
            'title.min' => 'Title field must be at least 3 characters',
            'description.required' => 'Description field is required',
            'description.min' => 'Description field must be at least 10 characters',
           ];
    }
}
