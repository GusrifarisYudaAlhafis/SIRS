<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
            'name' => 'required|max:255',
            'ttl' => 'required|max:255',
            'gender' => 'required|max:255',
            'address' => 'required',
            'phone_number' => 'required|max:255',
            'complaint' => 'required|max:255',
            'doctor_id' => 'required',
        ];
    }
}
