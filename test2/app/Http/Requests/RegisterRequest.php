<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:8|max:20',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|min:10|max:15'
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
            'email.email' => 'Email invalidate !!',
            'password.required' => 'Password is a required field !!',
            'password.min' => 'Password must contain at least 8 characters !! ',
            'password.max' => 'Maximum password of 20 characters !! ',
            'phone.required' => 'Password is a required field !! ',
            'phone.min' => 'Phone number must contain at least 10 number characters !!',
            'phone.max' => 'Phone numbers contain only 15 characters at most !!',
            'first_name.required' => 'First name is a required field !!',
            'last_name.required' => 'Last name is a required field  !!',
        ];
    }
}
