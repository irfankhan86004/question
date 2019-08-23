<?php

namespace Vanguard\Http\Requests\Auth;

use Vanguard\Http\Requests\Request;

class RegisterRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'email' => 'required|email|unique:users,email',
            'name_and_surname' => 'required',
            'birthday' => 'required',
            'password' => 'required|confirmed|min:8',
        ];

        if (settings('registration.captcha.enabled')) {
            $rules['g-recaptcha-response'] = 'required|captcha';
        }

        if (settings('tos')) {
            $rules['tos'] = 'accepted';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'tos.accepted' => trans('app.you_have_to_accept_tos'),
            'name_and_surname' => 'The name and surname field is required'
        ];
    }
}
