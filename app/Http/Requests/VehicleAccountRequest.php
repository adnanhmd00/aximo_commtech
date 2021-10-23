<?php

namespace App\Http\Requests;
use Hash;

class VehicleAccountRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return array
     */
    public function requestAttributes()
    {
        return [
            'country'       =>  $this->input('country'),
            'dealer'        =>  $this->input('dealer'),
            'license_plate_no'   =>$this->input('license_plate_no'),
            'engine_no'      => $this->input('engine_no'),
            'chassis_no'     => $this->input('chassis_no'),
            'make'          =>  $this->input('make'),                  
            'model'         =>  $this->input('model'),
            'color_name'    =>  $this->input('color_name'),
            'colour'         =>  $this->input('colour'),
            'email_id'         =>  $this->input('email_id'),
            'mobile_no'        =>  $this->input('mobile_no'),
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
