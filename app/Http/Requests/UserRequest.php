<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
     * @return array
     */
    public function rules()
    {
        $rules = [
            'bir_full_name' => 'required',
            'bir_email' => 'required|email',
            'password' => 'required|min:6|max:12',
        ];
        if (request()->route('user_id') && intval(request()->route('user_id')) > 0){
            unset($rules['password']);
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'bir_full_name.required' => 'Please Insert Full Name',
            'bir_email.required' => 'Please Insert Email',
            'bir_email.email' => 'The email you entered is not correct',
            'password.required' => 'Please Insert Password',
            'password.min' => 'Your password must be at most 6 characters',
            'password.max' => 'Your password must be at least 12 characters',
        ];
    }
}
