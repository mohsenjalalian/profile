<?php

namespace App\Http\Requests;

use App\Model\WorkExperince;
use Illuminate\Foundation\Http\FormRequest;

class WorkExperienceForm extends FormRequest
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
            'title' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'company' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'city' => 'required',
            'start_date' => 'required',
            'finish_date' => 'required',
            'about' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
        ];
    }


    public function process()
    {

        $education = WorkExperince::create([
            'title' => request('title'),
            'company' => request('company'),
            'city' => request('city'),
            'start_date' => request('start_date'),
            'finish_date' => request('finish_date'),
            'about' => request('about'),

        ]);
    }

}
