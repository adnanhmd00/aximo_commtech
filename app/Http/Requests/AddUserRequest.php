<?php

namespace App\Http\Requests;
use Illuminate\Support\Facades\Crypt;

class AddUserRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function requestAttributes()
    {
        return [
            'first_name'  =>  $this->input('name'),
            'email' =>  $this->input('email'),
            'mobile' => $this->input('mobile'),
            'password' => encrypt($this->input('password')),
            'role'  => $this->input('role'),
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
