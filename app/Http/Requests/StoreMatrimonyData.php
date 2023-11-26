<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMatrimonyData extends FormRequest
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
            'full_name_eng' => 'required|string|max:255',
            'village_id' => 'required|integer',
            'sakh' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'gender' => 'required|string|max:255',
            'education' => 'required|string|max:255',
            'height' => 'required',
            'weight' => 'required',
            'mosad' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'country_id' => 'required|integer',
            'photo' => 'required|image',
            'maritual_status' => 'required|string|max:255',
            'extra_details' => 'nullable|string|max:255',
            'mobile_no' => 'required|digits:10',
            'land' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'mosad_sakh' => 'required|string|max:255',
            'father_occupation' => 'required|string|max:255',
            'mother_occupation' => 'required|string|max:255',
            'brother' => 'required|integer',
            'sister' => 'required|integer',
            'income' => 'required|integer',
            'father_mobile' => 'required|digits:10',
        ];
    }

    public function messages()
    {
        return [
            'full_name_eng.required' => 'The full name field is required.',
            'full_name_eng.string' => 'The full name must be a string.',
            'full_name_eng.max' => 'The full name may not be greater than 255 characters.',
            'village_id.required' => 'The village id field is required.',
            'village_id.integer' => 'The village id must be an integer.',
            'sakh.required' => 'The sakh field is required.',
            'sakh.string' => 'The sakh must be a string.',
            'sakh.max' => 'The sakh may not be greater than 255 characters.',
            'birth_date.required' => 'The birth date field is required.',
            'birth_date.date' => 'The birth date must be a valid date.',
            'gender.required' => 'The gender field is required.',
            'gender.string' => 'The gender must be a string.',
            'gender.max' => 'The gender may not be greater than 255 characters.',
            'education.required' => 'The education field is required.',
            'education.string' => 'The education must be a string.',
            'education.max' => 'The education may not be greater than 255 characters.',
            'height.required' => 'The height field is required.',
            'weight.required' => 'The weight field is required.',
            'mosad.required' => 'The mosad field is required.',
            'mosad.string' => 'The mosad must be a string.',
            'mosad.max' => 'The mosad may not be greater than 255 characters.',
            'occupation.required' => 'The occupation field is required.',
            'occupation.string' => 'The occupation must be a string.',
            'occupation.max' => 'The occupation may not be greater than 255 characters.',
            'address.required' => 'The address field is required.',
            'address.string' => 'The address must be a string.',
            'address.max' => 'The address may not be greater than 255 characters.',
            'country_id.required' => 'The country id field is required.',
            'country_id.integer' => 'The country id must be an integer.',
            'photo.required' => 'The photo field is required.',
            'photo.image' => 'The photo must be an image.',
            'maritual_status.required' => 'The marital status field is required.',
            'maritual_status.string' => 'The marital status must be a string.',
            'maritual_status.max' => 'The marital status may not be greater than 255 characters.',
            'extra_details.string' => 'The extra details must be a string.',
            'extra_details.max' => 'The extra details may not be greater than 255 characters.',
            'mobile_no.required' => 'The mobile number field is required.',
            'mobile_no.digits' => 'The mobile number must be exactly 10 digits.',
            'land.required' => 'The land field is required.',
            'land.string' => 'The land must be a string.',
            'land.max' => 'The land may not be greater than 255 characters.',
            'mother_name.required' => 'The mother\'s name field is required.',
            'mother_name.string' => 'The mother\'s name must be a string.',
            'mother_name.max' => 'The mother\'s name may not be greater than 255 characters.',
            'mosad_sakh.required' => 'The mosad sakh field is required.',
            'mosad_sakh.string' => 'The mosad sakh must be a string.',
            'mosad_sakh.max' => 'The mosad sakh may not be greater than 255 characters.',
            'father_occupation.required' => 'The father\'s occupation field is required.',
            'father_occupation.string' => 'The father\'s occupation must be a string.',
            'father_occupation.max' => 'The father\'s occupation may not be greater than 255 characters.',
            'mother_occupation.required' => 'The mother\'s occupation field is required.',
            'mother_occupation.string' => 'The mother\'s occupation must be a string.',
            'mother_occupation.max' => 'The mother\'s occupation may not be greater than 255 characters.',
            'brother.required' => 'The brother field is required.',
            'brother.integer' => 'The brother field must be an integer.',
            'sister.required' => 'The sister field is required.',
            'sister.integer' => 'The sister field must be an integer.',
            'income.required' => 'The income field is required.',
            'income.integer' => 'The income must be an integer.',
            'father_mobile.required' => 'The father\'s mobile number field is required.',
            'father_mobile.digits' => 'The father\'s mobile number must be exactly 10 digits.',
        ];
    }
    
}
