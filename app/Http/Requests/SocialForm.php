<?php

namespace App\Http\Requests;

use App\Model\SocialNetwork;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class SocialForm extends FormRequest
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
//            'twitter' => 'url',
//            'facebook' => 'url',
//            'instagram' => 'url',
//            'telegram' => 'url',
//            'google_plus' => 'url',
//            'linkedin' => 'url',
//            'skype' => 'url',
//            'site' => 'url',
        ];
    }

    public function process()
    {

        $socials = request(['twitter', 'facebook', 'telegram', 'instagram',
            'google_plus', 'linkedin', 'skype', 'site']);


//        $data = [
//            'twitter' => request('twitter'),
//            'facebook' => request('facebook'),
//            'instagram' => request('instagram'),
//            'telegram' => request('telegram'),
//            'google_plus' => request('google_plus'),
//            'linkedin' => request('linkedin'),
//            'skype' => request('skype'),
//            'site' => request('site'),
//        ];
        foreach ($socials as $social) {
            if (empty($social)) {
              return redirect()->back();
            } else {
                SocialNetwork::updateOrCreate($socials);
            }
        }
    }


}
