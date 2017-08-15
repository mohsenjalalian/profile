<?php

namespace App\Http\Requests;

use App\Model\Contacts;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ContactForm extends FormRequest
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
            'email' => 'required|email|min:3',
            'phone_number' => 'required|min:5',
            'mobile' => 'required|min:5',
            'office_number' => 'required|min:5',
            'qr_code' => 'file|mimes:jpeg,bmp,png|max:5000',
        ];
    }

    public function process()
    {
        $photo = null;
        $file = request()->file('qr_code');

        if ($file) {
            $getimageName = time() . '.' . $file->getClientOriginalExtension();
            //Move Upload File
            $photo = $file->move('images/contact', $getimageName);
        }
        $data = [
            'email' => request('email'),
            'phone_number' => request('phone_number'),
            'mobile' => request('mobile'),
            'office_number' => request('office_number'),
        ];
        if (file_exists($photo)) {
            $data['qr_code'] = $photo;
        }

        $contacts = Contacts::create($data);
    }
}
