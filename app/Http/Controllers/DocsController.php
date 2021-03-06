<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocsForm;
use App\Model\Docs;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

/**
 * Class DocsController
 * @package App\Http\Controllers
 */
class DocsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docs = Docs::all()->sortByDesc('created_at');
        return view('admin.pages.docs.docs', compact('docs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.docs.createDocs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(DocsForm $form)
    {
        $form->process();
        return redirect()->route('docs')->with('success', 'دسته بندی شما با موفقیت ساخته شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Docs::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docs = Docs::find($id);
        return view('admin.pages.docs.update', compact('docs'))->renderSections()['content'];
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
            'published_place' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'published_year' => 'required',
            'photo' => 'file|mimes:jpeg,bmp,png|max:5000|nullable',
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if (!$validator) {
            return redirect()->back()->withErrors('اطلاعات وارد شده اشتباه است');
        } else {
            $file = request()->file('photo');
            if (!empty($file)) {
                $old_photo = \request('old_pic');
                //Move Upload File
                $photo = $file->move('images/docs', $old_photo);
            } elseif(\request('old_pic') == null){
                $old_photo = \request('old_pic');
                $this->deletePhoto($old_photo);

                $docs = Docs::find($id);
                $docs->photo = null;
                $docs->save();
            }

            // store
            $profile = Docs::find($id);

            $profile->name = Input::get('name');
            $profile->published_place = Input::get('published_place');
            $profile->published_year = Input::get('published_year');
            $profile->link = Input::get('link');
            if ($file) {
                $profile->photo = $photo;
            }

            $profile->save();

            // redirect
            return redirect()->route('docs')->with('success', 'پروفایل شما با موفقیت اصلاح شد');
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
        $docs = Docs::find($id);

        if ($docs->photo) {
            $this->deletePhoto($docs->photo);
        }

        if ($docs->delete()) {
            return redirect()->back()->with('success', 'مقاله با موفقیت حذف شد');
        }

        return redirect()->back()->withErrors('متاسفانه مقاله حذف نشد');
    }

    public function deletePhoto($photo)
    {
        if (file_exists(public_path($photo))) {
            @unlink(public_path($photo));
        }
    }
}
