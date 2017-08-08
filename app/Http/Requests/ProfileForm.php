<?php

namespace App\Http\Requests;

use App\Model\Profile;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

class ProfileForm extends FormRequest
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
            'first_name' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'last_name' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'summary' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'about_me' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'last_degree' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'birth_day' => 'required',
            'marriage' => 'required',
            'military' => 'required',
            'birth_place' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'gender' => 'required',
            'job' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'photo' => 'file|mimes:jpeg,bmp,png|max:5000',
            'cover' => 'file|mimes:jpeg,bmp,png|max:5000',
            'pdf' => 'file|mimes:pdf|max:10000',
        ];
    }

    public function process()
    {
        $photos = $this->uploadPhoto();

        $covers = $this->uploadCover();

        $pdfs = $this->uploadPdf();

        $data  =  [
                'first_name' => request('first_name'),
                'last_name' => request('last_name'),
                'summary' => request('summary'),
                'about_me' => request('about_me'),
                'last_degree' => request('last_degree'),
                'birth_day' => request('birth_day'),
                'marriage' => request('marriage'),
                'military' => request('military'),
                'birth_place' => request('birth_place'),
                'gender' => request('gender'),
                'job' => request('job'),
            ];

        if (file_exists($photos)) {
            $data['photo'] = $photos;
        }


        if (file_exists($covers)) {
            $data['cover'] = $covers;
        }
        if (file_exists($pdfs)) {
            $data['pdf'] = $pdfs;
        }

        $profile = Profile::create($data);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\File\File
     */
    private function uploadPdf()
    {
        $uploadPDf=null;

        $filePdf = request()->file('pdf');
        if ($filePdf) {
            //Change File name
            $getimageName = time() . '.' . $filePdf->getClientOriginalExtension();
            //Move Upload File
            $uploadPDf = $filePdf->move('images/profile/pdf', $getimageName);
            return $uploadPDf;
        }
    }

    /**
     * @return \Symfony\Component\HttpFoundation\File\File
     */
    private function uploadCover()
    {
        $uploadCover = null;

        $fileCover = request()->file('cover');
        if ($fileCover) {
            //Change File name
            $getimageName = time() . '.' . $fileCover->getClientOriginalExtension();
            //Move Upload Filtimee
            $uploadCover = $fileCover->move('images/profile/cover', $getimageName);
            return $uploadCover;
        }
    }

    /**
     * @return \Symfony\Component\HttpFoundation\File\File
     */
    private function uploadPhoto()
    {
        $uploadPhoto = null;

        $filePhoto = request()->file('photo');

        if ($filePhoto) {
            //Change File name
            $getimageName = time() . '.' . $filePhoto->getClientOriginalExtension();
            //Move Upload File
            $uploadPhoto = $filePhoto->move('images/profile/photo', $getimageName);
            return $uploadPhoto;
        }
    }
}
