<?php

namespace App\Http\Requests;

use App\Model\Certification;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CertificateForm extends FormRequest
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
            'info' => 'required|min:3',
            'photo' => 'file|mimes:jpeg,bmp,png|max:5000',
            'type' => 'required|min:3'
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
            $photo =  $file->move('images/certificate', $getimageName);
        }


        $data =  [
                'name'     => request('name'),
                'info'     => request('info'),
                'type'     => request('type'),
            ];
        if (file_exists($photo)) {
            $data['photo']  = $photo;
        }
        $certificate = Certification::create($data);
    }
}
