<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorsRegistrationFormRequest extends FormRequest
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
            
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:doctors'],
           # 'password' => ['required', 'string', 'min:8'],
            'specialization' => ['required', 'integer'],
            'department' => ['required', 'integer'],
            'phone' => ['string', 'min:10', 'unique:doctors'],
            'avatar' => 'nullable|image|mimes:png,jpg,jpeg'
        ];
    }
}
