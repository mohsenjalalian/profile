<?php

namespace App\Http\Controllers;

use App\Http\Requests\SocialForm;
use App\Model\SocialNetwork;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

/**
 * Class SocialNetworkController
 * @package App\Http\Controllers
 */
class SocialNetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socials = SocialNetwork::all();
        return view('admin.pages.socialNetwork.socialNetwork', compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.socialNetwork.createSocialNetwork');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SocialForm $form)
    {
        $form->process();
        return redirect()->route('social-network');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        SocialNetwork::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $social = SocialNetwork::find($id);
        return view('admin.pages.socialNetwork.updateSocialNetwork', compact('social'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
            // store
            $profile = SocialNetwork::find($id);
            $profile->twitter = Input::get('twitter');
            $profile->facebook = Input::get('facebook');
            $profile->instagram = Input::get('instagram');
            $profile->telegram = Input::get('telegram');
            $profile->google_plus = Input::get('google_plus');
            $profile->linkedin = Input::get('linkedin');
            $profile->skype = Input::get('skype');
            $profile->site = Input::get('site');

            $profile->save();

            // redirect
            return redirect()->route('social-network')->with('success', 'شبکه های اجتماعی شما با موفقیت اصلاح شد');
        }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $social = SocialNetwork::find($id);
        if ($social->delete()) {
            return redirect()->back()->with('success', 'شبکه اجتماعی با موفقیت حذف شد');
        }

        return redirect()->back()->withErrors('متاسفانه شبکه اجتماعی حذف نشد');
    }
}
