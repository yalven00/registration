<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return  true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [

                'name'              =>      'required|string|max:20',
                'surname'           =>      'required|string|max:35',
                'email'             =>      'required|email|unique:users,email',
                'password'          =>      'required|alpha_num|min:6',
                'confirm_password'  =>      'required|same:password'
        ];
    }


    public function messages(): array
    {
        return [

            'name' => 'Enter correct name',
            'surname' => 'Enter correct surname',
            'email' => 'Enter a valid email address',
            'password' => "Wrong password, try again",
            'confirm_password' => "Passwords are not equal"

        ];  

    }
}
