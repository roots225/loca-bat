<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class StoreAgencyRequest extends MyFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // TODO : only admin must add agency
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
            'name' => 'required|unique:agencies',
            'mobile' => 'required|max:15'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Le Nom de l'agence est requis",
            'name.unique' => "Le Nom de l'agence est déjà utilisé",
            'mobile.required' => "le numéro de téléphone est requis"
        ];
    }
}
