<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
     public function rules()
    {
        return [
            'email' =>'required|email',
            'password' => 'required|min:6'
        ];
    }

    /**
     * customize msg error
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'Email is a required field !!',
            'email.email' => 'Email invalidate !! ',
            'password.required' => 'Password is a required field !! ',
            'password.min' => 'Password must contain at least 6 characters !!',
        ];
    }
}
