<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;

class UpdateDichvuRequest extends FormRequest
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
            //
            'tendv' => ['required','max:255', ValidationRule::unique('dichvus','tendv')->ignore($this->dichvu)],
            'chitiet' => ['required','max:255'],
            'giadv' => ['required','max:255'],
            'loaidv_id' => ['required','max:255'],
        ];
    }
}
