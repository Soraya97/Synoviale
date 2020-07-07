<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompteRequest extends FormRequest
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
          // user
          'username' => 'required',
          'password' => 'required|min:6|confirmed',
          'email' => 'required|email|confirmed',

          // person
          'name' => 'required|min:3|max:100|regex:([A-Z]{1})',
          'firstname' => 'required|min:3|max:100|regex:([A-Z]{1})',
          'email2' => 'email',
          'phoneNumber1' => 'numeric|min:10|max:10|regex:([0-9])',
          'phoneNumber2' => 'numeric|min:10|max:10|regex:([0-9])',
          'comment' => 'max:250',

          // address
          'street1' => 'max:250',
          'streetNumber' => '',
          'street2' => 'max:250',
          'POBox' => '',

          // city
          'city' => 'regex:([A-Z]{1})',
          'postalCode' => 'min:4|max:4|numeric',

          // country
          'country' => 'regex:([A-Z]{1})'
        ];
    }
}
