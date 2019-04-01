<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreaditCardRequest extends FormRequest
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
        return[
            'number_credit_card' => 'required|min:13|max:19',
            'name_credit_card' => 'required',
            'ccv_code' => 'required|min:3|max:4'
        ];
    }

    public function messages()
    {
        return [
            'number_credit_card.required' => 'Number Credit Card là trường bắt buộc',
            'number_credit_card.min:13' => 'Number Credit Card có ít nhất 13 ký tự !',
            'number_credit_card.max:19' => 'Number Credit Card có nhiều nhất 19 ký tự !',
            'name_credit_card.required' => 'Number Credit Card là trường bắt buộc',
            'ccv_code.required' => 'CCV CODE là trường bắt buộc !',
            'ccv_code.min:3' => 'CCV CODE phải chứa ít nhất 3 ký tự',
            'ccv_code.max:4' => 'CCV CODE phải chứa nhiều nhất 4 ký tự',
        ];
    }
}
