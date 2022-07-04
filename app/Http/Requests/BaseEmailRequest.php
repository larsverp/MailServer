<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseEmailRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'subject' => 'required|string',
            'body' => 'required|string',
            'recipients' => 'required|array',
            'recipients.*' => 'required|email',
        ];
    }
}
