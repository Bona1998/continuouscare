<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientProfileForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fullName' => 'required|string|255',
            'stateId' => 'required',
            'address' => 'sometimes',
            'hight' => 'required',
            'weight' => 'required',
            'bloodGroup' => 'required',
        ];
    }
}
