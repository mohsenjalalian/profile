<?php

namespace App\Http\Requests;

use App\Model\Education;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class EducationForm extends FormRequest
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
            'university_name' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'field' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'tendency' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'logo' => 'file|mimes:jpeg,bmp,png|max:5000|nullable',
            'start_date' => 'required',
            'finish_date' => 'required',
            ];
    }

    public function process()
    {
        $logo = null;
        $file = request()->file('logo');

        if ($file) {
            //Change File name
            $getimageName = time() . '.' . $file->getClientOriginalExtension();
            //Move Upload File
            $logo =  $file->move('images/education', $getimageName);
        }
        $data = [
            'university_name' => request('university_name'),
            'field' => request('field'),
            'tendency' => request('tendency'),
            'start_date' => request('start_date'),
            'finish_date' => request('finish_date'),
        ];

        if (file_exists($logo)) {
            $data['logo'] = $logo;
        }

        $education = Education::create($data);
    }
}
