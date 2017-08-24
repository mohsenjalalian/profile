<?php

namespace App\Http\Requests;

use App\Model\Album;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AlbumForm extends FormRequest
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
            'photo' => 'required|file|mimes:jpeg,bmp,png|max:5000|nullable',
        ];
    }

    public function process()
    {
        $photo = $this->uploadPhoto();

        Album::create(
            [
                'photo' => $photo,
            ]
        );
    }

    /**
     * @return \Symfony\Component\HttpFoundation\File\File
     */
    private function uploadPhoto()
    {
        $file = request()->file('photo');
        //Change File name
        $photo_name = time() . '.' . $file->getClientOriginalExtension();
        //Move Upload File
        $photo = $file->move('images/album', $photo_name);
        return $photo;
    }
}
