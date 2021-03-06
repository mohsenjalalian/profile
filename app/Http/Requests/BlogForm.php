<?php

namespace App\Http\Requests;

use App\Model\Blog;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class BlogForm extends FormRequest
{
    const ALBUM_PATH = 'images/album';
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
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'photo[]' => 'file|mimes:jpeg,bmp,png|max:5000|nullable',
        ];
    }

    /**
     * Create Blog & Photo
     */
    public function process()
    {
        $blog = Blog::create([
            'title' => request('title'),
            'description' => request('description'),
            'date' => request('date'),
        ]);


        $photos = $this->uploadPhoto($blog->id);

        if (!empty($photos)) {
            DB::table('albums')->insert($photos);
        }
    }

    /**
     * Get and Upload Photo
     * @return \Symfony\Component\HttpFoundation\File\File
     */
    private function uploadPhoto($blog_id)
    {
        $file =null;
        $photos = request()->file('photo');

        if ($photos) {
            foreach ($photos as $photo) {
                //Change File name
                $photoName =time()."_".$photo->getClientOriginalName();
                $dest =   $photo->move(self::ALBUM_PATH, $photoName);

                //Move Upload File
                $file[] = [
                    'blog_id'=>$blog_id,
                    'photo'=>$photoName,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ];
            }

            return $file;
        }
    }
}
