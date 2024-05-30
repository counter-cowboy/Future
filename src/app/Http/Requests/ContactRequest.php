<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'fio'=> 'required|string',
            'company'=>  'string|nullable',
            'phone_number'=> 'string|required',
            'email' => 'email|required',
            'birth_date'=>'nullable|string',
            'photo'=>'nullable|string'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
