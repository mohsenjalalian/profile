<?php

namespace App\Http\Requests;

use App\Model\Skills;
use Illuminate\Foundation\Http\FormRequest;

class SkillForm extends FormRequest
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
            'type' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'name' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'point' => 'required'
            ];
    }

    public function process()
    {

        $skills = Skills::create(
            [
                'type'      => request('type'),
                'name'      => request('name'),
                'point'      => request('point'),
            ]);
    }


}
