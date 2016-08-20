<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ChangePassRequest extends Request
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
            'oldpass' => 'required',
            'newpass1' => 'required|min:8',
            'newpass2' => 'required|same:newpass1'
        ];
    }

    public function messages()
    {
        return [

        "newpass2.same" => "The two new password do not match.",
        "newpass1.required" => "New password is required"

        ];
    }
}
