<?php

namespace App\Http\Requests;

use App\Model\SocialNetwork;
use Illuminate\Foundation\Http\FormRequest;

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
            'twitter'  => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'telegram' => 'required',
            'google_plus' => 'required',
            'linkedin' => 'required',
            'skype' => 'required',
        ];
    }

    public function process()
    {

        $profile = SocialNetwork::create(
            [

                'twitter'      => request('twitter'),
                'facebook'     => request('facebook'),
                'instagram'     => request('instagram'),
                'telegram'     => request('telegram'),
                'google_plus'     => request('google_plus'),
                'linkedin'     => request('linkedin'),
                'skype'     => request('skype'),

            ]);

    }
}
