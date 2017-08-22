<?php

namespace App\Http\Requests;

use App\Model\Category;
use Illuminate\Foundation\Http\FormRequest;

class CategoryForm extends FormRequest
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
            'name'  => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
        ];
    }

    public function process()
    {
        $category = Category::create([
            'name' => request('name')
        ]);
    }
}
