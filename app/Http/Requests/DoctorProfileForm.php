<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorProfileForm extends FormRequest
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
            'fullName'=>'required|string|max:255',
            'bio'=>'sometimes|text|min:3',
            'rolejob_id'=>'required',
            'stateId'=>'required',
            'address'=>'sometimes',
            'specialized_id'=>'required',
        ];
    }
}
