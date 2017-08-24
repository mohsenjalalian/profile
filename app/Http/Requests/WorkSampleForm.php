<?php

namespace App\Http\Requests;

use App\Model\Category;
use App\Model\WorkSample;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkSampleForm extends FormRequest
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
            'photo' => 'file|mimes:jpeg,bmp,png|max:5000|nullable',
        ];
    }
    public function process()
    {
        $photo = null;
        $file = request()->file('photo');

        if ($file) {
            //Change File name
            $getimageName = time() .'.'.$file->getClientOriginalExtension();
            //Move Upload File
            $photo = $file->move('images/workSample', $getimageName);
        }

        $data =[
            'name' => request('name'),
            'link' => request('link')
        ];

        $data['photo'] = $photo;

        $workSample = WorkSample::create($data);

        $workSample->category()->attach(request('category_id'));
        $workSample->skills()->attach(request('skill_id'));
    }
}
