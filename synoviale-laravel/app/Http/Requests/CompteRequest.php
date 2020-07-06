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
          // 'name' => 'required |min:3|max:100|regex:([A-Z]{1})',
          // 'firstname' => 'required|min:3|max:100|regex:([A-Z]{1})',
          //
          // 'ID' => 'required|numeric', //unique:users
          // 'password' => 'required|min:6|confirmed',
          // 'email' => 'required|email|confirmed' //unique:users

          // 'phonenumber' => 'numeric|min:10|max:10|regex:([0-9])',
          // 'email' => 'email',
          // 'comment' => 'max:250',
          // 'street' => 'max:250',
          // 'streetnumber' => '',
          // 'pobox' => '',
          // 'city' => 'regex:([A-Z]{1})',
          // 'postalcode' => 'min:4|max:4|numeric',
          // 'country' => 'regex:([A-Z]{1})'

          // 'phonenumber' => 'numeric|min:10|max:10|regex:([0-9])',
          // 'email' => 'email',
          // 'comment' => 'max:250',
          // 'street' => 'max:250',
          // 'streetnumber' => '',
          // 'pobox' => '',
          // 'city' => 'regex:([A-Z]{1})',
          // 'postalcode' => 'min:4|max:4|numeric',
          // 'country' => 'regex:([A-Z]{1})'
          //
          // 'number' => 'required|min:1|unique',
          //
          // 'phoneNumber1' => 'null',
          // 'phoneNumber2' => 'null',
          // 'email1' => 'email:rfc,dns|null',
          // 'email2' => 'email:rfc,dns|null',
          // 'comment' => 'null|min:3',
          // 'address_id' => 'required',
        ];
    }
}
