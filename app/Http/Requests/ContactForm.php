<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactForm extends FormRequest
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
            'attachment' => 'mimes:doc,docx,pdf,odt,rtf,txt,tex',
            'title' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'serviceType' => 'required',
            'message' => 'required',
        ];
    }
}
