<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;

class UpdateMonanRequest extends FormRequest
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
            'tenma' => ['required','max:255', ValidationRule::unique('monans','tenma')->ignore($this->monan)],
            'mota' => ['required','max:255', ValidationRule::unique('monans','mota')->ignore($this->monan)],
            'giama' => ['required','max:255', ValidationRule::unique('monans','giama')->ignore($this->monan)],
        ];
    }
}
