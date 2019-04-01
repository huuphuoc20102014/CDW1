<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'address'    => 'required',
            'first_name'       => 'required',
            'last_name'       => 'required',
            'phone_number' => 'required|min:10|max:15'
        ];
    }
    /**
     * customize msg error
     * @return array
     */
    public function messages()
    {
        return [
            'address.required' => 'Address is a required field !!',
            'phone_number.required' => 'Phone number is a required field !! ',
            'phone_number.min' => 'Phone number must contain at least 10 number characters !!',
            'phone_number.max' => 'Phone numbers contain only 15 characters at most !!',
            'first_name.required' => 'First name is a required field !!',
            'last_name.required' => 'Last name is a required field  !!',
        ];
    }
}
