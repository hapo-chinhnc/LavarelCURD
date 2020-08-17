<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'name' => 'required|min:5|max:255',
            'gender' => 'required|boolean',
            'email' => 'required|unique:users',
            'phone' => 'required|numeric|min:9',
            'address' => 'required|min:5|max:255',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif',
        ];
    }
}
