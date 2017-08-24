<?php

namespace App\Http\Requests;

use App\Model\Language;
use Illuminate\Foundation\Http\FormRequest;

class LanguageForm extends FormRequest
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
            'name' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'reading' => 'required',
            'writing' => 'required',
            'speaking' => 'required',
            'listening' => 'required',
        ];
    }

    public function process()
    {
        $language = Language::create([
            'name' => request('name'),
            'reading' => request('reading'),
            'writing' => request('writing'),
            'speaking' => request('speaking'),
            'listening' => request('listening'),
        ]);
    }
}
