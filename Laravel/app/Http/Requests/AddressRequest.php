<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            //
            'number' => 'required',
            'street1' => 'required |min:3|max:100',
            'street2' => 'min:3|max:100',
            'streetNumber' => 'min:1',
            'POBox' => 'min:1',
            'city_id' => 'required',
            'person_id' => 'required',
            'addressType_id' => 'required',
        ];
    }

}
