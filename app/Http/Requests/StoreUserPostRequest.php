<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserPostRequest extends FormRequest
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
        return [
            'first_name'=>'required|min:4|max:20',
            'last_name'=>'required|min:4|max:20',
            'email'=>'required|email',
            'contact'=>'required|numeric|digits:11',
            'address'=>'required',
            'gender'=>'in:male,female',
            'password'=>'required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'
        ];
    }

    public function message()
    {
        return [
            'password.regex' =>'Password is not strong enough e.g (Admin@442795)',
        ];
    }
}
