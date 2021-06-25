<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'date_profiled' => 'required|date',
            'primary_legal_counsel' => 'required',
            'date_of_birth' => 'required|date',
            'profile_image' => 'nullable|file',
            'case_details' => 'required',
        ];
    }
}
