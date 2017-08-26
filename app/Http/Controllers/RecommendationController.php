<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecommendForm;
use App\Model\Recommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

/**
 * Class RecommendationController
 * @package App\Http\Controllers
 */
class RecommendationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recommends = Recommendation::all();
        return view('admin.pages.recommend.recommend', compact('recommends'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.recommend.createRecommend');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(RecommendForm $form)
    {
        $form->process();
        return redirect()->route('recommend');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Recommendation::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $recommend = Recommendation::find($id);
        if ($request->ajax()) {
            return view('admin.pages.recommend.update', compact('recommend'))->renderSections()['content'];
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $rules = array(
            'name' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'position' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'company' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'info' => 'required|min:3',
            'photo' => 'file|mimes:jpeg,bmp,png|max:5000|nullable',
        );


        $validator = Validator::make(Input::all(), $rules);
        // process the login
        if (!$validator) {
            return redirect()->back()->withErrors('اطلاعات وارد شده اشتباه است');
        } else {
            $file = request()->file('photo');

            if (!empty($file)) {
                //Change File name
                $old_photo = \request('old_pic');
                //Move Upload File
                $photo = $file->move('images/recommend', $old_photo);
                ///
            } elseif (\request('old_pic') == null) {
                $old_photo = \request('old_pic');
                $this->deletePhoto($old_photo);

                $recommend = Recommendation::find($id);
                $recommend->photo = null;
                $recommend->save();
            }
            $certificate = Recommendation::find($id);

            $certificate->name = Input::get('name');
            $certificate->position = Input::get('position');
            $certificate->company = Input::get('company');
            $certificate->info = Input::get('info');
            if ($file) {
                $certificate->photo = $photo;
            }

            $certificate->save();

            // redirect
            return redirect()->route('recommend')->with('success', 'نظرات شما با موفقیت اصلاح شد');
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
        $recommend = Recommendation::find($id);

        if ($recommend->photo) {
            $this->deletePhoto($recommend->photo);
        }
        if ($recommend->delete()) {
            return redirect()->back()->with('success', 'نظرات با موفقیت حذف شد');
        }

        return redirect()->back()->withErrors('متاسفانه نظرات حذف نشد');
    }


    public function deletePhoto($photo)
    {
        if (file_exists(public_path($photo))) {
            @unlink(public_path($photo));
        }
    }
}
