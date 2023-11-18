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
            'full_name_guj' => 'nullable',
            'village_id' => 'required|integer',
            'sakh' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'gender' => 'required|string|max:255',
            'member_id' => 'required|integer',
            'education' => 'required|string|max:255',
            'height' => 'required|integer',
            'weight' => 'required|integer',
            'mosad' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'country_id' => 'required|integer',
            'photo' => 'required|image',
            'maritual_status' => 'required|string|max:255',
            'extra_details' => 'nullable|string|max:255',
            'mobile_no' => 'required|digits:10',
            'approval_flag' => 'required|boolean',
            'met_active_flag' => 'required|boolean',
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
}
