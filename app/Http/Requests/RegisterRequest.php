<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'full_name_eng' => 'required',
            'village_id' => 'required',
            'country_id' => 'required',
            'city_name' => 'required',
            'birth_date' => 'required',
            'blood_grp' => 'nullable',
            'mobile_no' => 'required|numeric',
            'email_id' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png|max:4096',
            'address' => 'required',
            'crop_photo' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'full_name_eng.required' => 'Please enter full name',
            'village_id.required' => 'Please select your village',
            'country_id.required' => 'Please select your current country',
            'city_name.required' => 'Please enter your city name',
            'birth_date.required' => 'Please select your birth date',
            'mobile_no.required' => 'Please enter your mobile number',
            'email_id.required' => 'Please enter your email address',
            'photo.required' => 'Please upload your profile photo',
            'address.required' => 'Please enter your home address',
            'crop_photo.required' => 'Please crop your profile photo',
            'mobile_no.numeric' => 'Mobile number should be numeric',
            'photo.max' => 'You can upload photo within 4 MB size.',
            'photo.mimes' => 'Supported types only are jpg, jpeg, png'
        ];
    }
}
