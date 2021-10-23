<?php

namespace App\Http\Requests;
use Hash;

class LoginRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return array
     */
    public function requestAttributes()
    {
        return [
            'email'    =>  $this->input('email'),
            'password' => $this->input('password'),
            'mobile' => $this->input('email'),
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           //
        ];
    }
}
