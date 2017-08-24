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
        ];
    }

    public function process()
    {
        $socials = request(['twitter', 'facebook', 'telegram', 'instagram',
            'google_plus', 'linkedin', 'skype', 'site']);

        foreach ($socials as $social) {
            if (empty($social)) {
                return redirect()->back();
            } else {
                SocialNetwork::updateOrCreate($socials);
            }
        }
    }
}
