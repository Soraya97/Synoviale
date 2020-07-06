<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
            'number' => 'required|min:1|unique',
            'name' => 'required |min:3|max:100',
            'firstname' => 'min:3|max:100',
            'phoneNumber1' => 'null',
            'phoneNumber2' => 'null',
            'email1' => 'email:rfc,dns|null',
            'email2' => 'email:rfc,dns|null',
            'comment' => 'null|min:3',
            'address_id' => 'required',
        ];
    }
}
