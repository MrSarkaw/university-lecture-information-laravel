<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserRequest extends FormRequest
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
    public function rules(Request $request)
    {
        if(in_array($this->method(), ['PUT' , 'PATCH'])){
            return [
                'email' => 'required|email|max:255|unique:users,email,'.$request->user,
                'password' => 'nullable|min:6|confirmed'
            ];
        }else{
            return [
                'email' => 'required|email|max:255|unique:users,email',
                'password' => 'required|min:6|confirmed'
            ];
        }

    }
}
