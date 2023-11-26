<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFamilyMemberRequest extends FormRequest
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
            "ffull_name_eng" => 'required',
            "relation_id" => 'required',
            "village_id" => 'required',
            "fcity_name" => 'required',
            "fbirth_date" => 'required|date',
            "fblood_grp" => 'nullable',
            "fmosad" => 'required',
            "fpiyar" => 'required',
            "fmarried_status" => 'required',
            "feducation" => 'required',
            "foccupation" => 'required',
            "fmobile_no" => 'required|numeric',
            "femail_id" => 'nullable',
            "fphoto" => 'required',
            "country_id" => 'required',
            "fbussiness_address" => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'ffull_name_eng.required' => 'The full name field is required.',
            'relation_id.required' => 'The relation field is required.',
            'village_id.required' => 'The village field is required.',
            'fcity_name.required' => 'The city name field is required.',
            'fbirth_date.required' => 'The birth date field is required.',
            'fbirth_date.date' => 'The birth date must be a valid date.',
            'fmosad.required' => 'The Mosad field is required.',
            'fpiyar.required' => 'The Piyar field is required.',
            'fmarried_status.required' => 'The married status field is required.',
            'feducation.required' => 'The education field is required.',
            'foccupation.required' => 'The occupation field is required.',
            'fmobile_no.required' => 'The mobile number field is required.',
            'fmobile_no.numeric' => 'The mobile number field must be a numeric.',
            'fphoto.required' => 'The photo field is required.',
            'country_id.required' => 'The country field is required.',
        ];
    }
}
