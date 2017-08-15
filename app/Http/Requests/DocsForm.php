<?php

namespace App\Http\Requests;

use App\Model\Docs;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DocsForm extends FormRequest
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
            'published_place'  => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'published_year'  => 'required',
            'photo' => 'file|mimes:jpeg,bmp,png|max:5000',
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
            $photo =  $file->move('images/docs', $getimageName);
        }

        $data = [
            'name' => request('name'),
            'published_place' => request('published_place'),
            'published_year' => request('published_year'),
            'link' => request('link')
        ];

        if (file_exists($photo)) {
            $data['photo'] = $photo;
        }

        $docs = Docs::create($data);
    }
}
