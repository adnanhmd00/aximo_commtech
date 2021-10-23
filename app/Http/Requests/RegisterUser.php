<?php

namespace App\Http\Requests;
use Hash;

class RegisterUser extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return array
     */
    public function requestAttributes()
    {
        return [
            'role_id'   =>  2,
            'name' => $this->input('name'),
            'email'    =>  $this->input('email'),
            'password' => Hash::make($this->input('password')),
            'mobile'   => $this->input('mobile'),
            'country'  => $this->input('country')
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
