<?php

namespace Koraycicekciogullari\HydroContact\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{

    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return string[][]
     */
    public function rules(): array
    {
        return [
            'name'      =>  ['required', 'max:50'],
            'email'     =>  ['required', 'email'],
            'subject'   =>  ['nullable', 'max:150'],
            'content'   =>  ['required'],
        ];
    }
}
