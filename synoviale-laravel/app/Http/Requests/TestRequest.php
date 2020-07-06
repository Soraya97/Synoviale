<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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
            'number' => 'required',
            'startTime' => 'required|date',
            'endTime' => 'min:3|date',
            'feedback' => 'min:3',
            'testday_id' => 'min:1',
            'edition_id' => 'required',
            'event_id' => 'required',
            'product_id' => 'required',
            'client_id' => 'required',
        ];
    }
}
