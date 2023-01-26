<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CollegeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        if(in_array($this->method(), ['PUT', 'PATCH'])){
            return [
                'name' => 'required|string|max:255',
                'type' => 'required|in:0,1',
                'img' => 'nullable|mimes:png,jpg'
            ];
        }else{
            return [
                'name' => 'required|string|max:255',
                'type' => 'required|in:0,1',
                'img' => 'required|mimes:png,jpg'
            ];
        }
    }
}
