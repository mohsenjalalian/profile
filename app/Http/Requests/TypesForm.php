<?php

namespace App\Http\Requests;

use App\Model\SkillType;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class TypesForm
 * @package App\Http\Requests
 */
class TypesForm extends FormRequest
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
            'name' => 'required|regex:/^[\pL\s\-\0-9]+$/u'
        ];
    }

    /**
     *
     */
    public function process()
    {
        $type = SkillType::create(
            [
                'name' => request('name'),
            ]
        );
    }
}
