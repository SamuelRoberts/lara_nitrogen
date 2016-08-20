<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'username' => 'required|unique:ss_users|min:3',
            'password' =>'required|min:8',
            'password2' =>'required|same:password'
        ];
    }

    public function messages()
    {
        return [

        "password2.same" => "The two password do not match.",
        "username.unique" => "This username already exists. Please choose another username"

        ];
    }
}
