<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileForm;
use App\Model\Profile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

/**
 * Class ProfileController
 * @package App\Http\Controllers
 */
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::all();
        return view('admin.pages.profile.profile', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.profile.createProfile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileForm $form)
    {
        $form->process();
        return redirect()->route('profile')->with('success', 'پروفایل شما با موفقیت ساخته شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Profile::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('admin.pages.profile.update', compact('profile'));
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
        $rules = array(
            'first_name' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'last_name' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'last_degree' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'birth_day' => 'required',
            'marriage' => 'required',
            'military' => 'required',
            'birth_place' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'gender' => 'required',
            'job' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'photo' => 'file|mimes:jpeg,bmp,png|max:5000|nullable',
            'cover' => 'file|mimes:jpeg,bmp,png|max:5000|nullable',
            'pdf' => 'file|mimes:pdf|max:10000|nullable',

        );

        $validator = Validator::make(Input::all(), $rules);
        // process the login
        if (!$validator) {
            return redirect()->back()->withErrors('اطلاعات وارد شده اشتباه است');
        } else {
            $file_photo = request()->file('photo');
            if ($file_photo) {
                $old_photo = \request('old_pic');
                //Move Upload File
                $photo = $file_photo->move('images/profile/photo', $old_photo);

                ///
            }

            $file_cover = request()->file('cover');
            if ($file_cover) {
                $old_cover = \request('old_cover');
                //Move Upload File
                $cover = $file_cover->move('images/profile/cover', $old_cover);
            }

            $file_pdf = request()->file('pdf');
            if ($file_pdf) {
                $old_pdf = \request('old_pdf');
                //Move Upload File
                $pdf = $file_pdf->move('images/profile/pdf', $old_pdf);
            }

            // store
            $profile = Profile::find($id);
            $profile->first_name = Input::get('first_name');
            $profile->last_name = Input::get('last_name');
            $profile->summary = Input::get('summary');
            $profile->about_me = Input::get('about_me');
            $profile->last_degree = Input::get('last_degree');
            $profile->birth_day = Input::get('birth_day');
            $profile->marriage = Input::get('marriage');
            $profile->military = Input::get('military');
            $profile->birth_place = Input::get('birth_place');
            $profile->gender = Input::get('gender');
            $profile->job = Input::get('job');
            if ($file_photo) {
                $profile->photo = $photo;
            }
            if ($file_cover) {
                $profile->cover = $cover;
            }
            if ($file_pdf) {
                $profile->pdf = $pdf;
            }

            $profile->save();

            // redirect
            return redirect()->route('profile')->with('success', 'پروفایل شما با موفقیت اصلاح شد');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::find($id);
        if ($profile->photo) {
            unlink(public_path($profile->photo));
        }
        if ($profile->cover) {
            unlink(public_path($profile->cover));
        }
        if ($profile->pdf) {
            unlink(public_path($profile->pdf));
        }
        if ($profile->delete()) {
            return redirect()->back()->with('success', 'پروفایل با موفقیت حذف شد');
        }

        return redirect()->back()->withErrors('متاسفانه پروفایل حذف نشد');
    }
}
