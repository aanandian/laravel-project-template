<?php

namespace App\Http\Requests;

use App\User;
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
        $id = $this->route()->parameter('user') ? $this->route()->parameter('user') : 'null';

        $rules = [
            'name'      => 'required|string|max:32',
            'username'  => "required|string|alpha_dash|min:4|max:16|unique:".with(new User)->getTable().",username,{$id}",
            'email'     => "required|string|email|max:64|unique:".with(new User)->getTable().",email,{$id}",
            'password'  => 'required|string|min:6|confirmed',
        ];

        if ($id)
        {
            $rules['password'] = 'nullable|string|min:6|max:16|confirmed';
        }

        return $rules;
    }
}
