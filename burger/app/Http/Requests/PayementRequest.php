<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class PayementRequest extends FormRequest
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
            'name' => 'required|max:255',
            'first_name' => 'required|string|max:255',
            'adresse' => 'required|string',
            'ville' => 'required|string',
            'code_zip' => 'required|string|min:2',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'num_tel' => 'required|string|min:10|max:10',
            'extraInfo' => 'string|max:255',
        ];
    }
}
