<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkSampleForm;
use App\Model\Category;
use App\Model\Skills;
use App\Model\WorkSample;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

/**
 * Class WorkSampleController
 * @package App\Http\Controllers
 */
class WorkSampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workSamples = WorkSample::all();

        return view('admin.pages.workSample.workSample', compact('workSamples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $skills = Skills::all();
        return view('admin.pages.workSample.createWorkSample', compact('categories', 'skills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(WorkSampleForm $form)
    {
        $result = $form->process();
        return redirect()->route('work-sample')->with('success', 'دسته بندی شما با موفقیت ساخته شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workSample = WorkSample::find($id);
        $categories = Category::all();
        $skills = Skills::all();
        $ws = [];
        $sw = [];
        foreach ($workSample->category as $category) {
            $ws[$category['id']] = $category;
        }
        foreach ($workSample->skills as $skill) {
            $sw[$skill['id']] = $skill;
        }
        return view('admin.pages.workSample.update', compact('workSample', 'ws','sw','categories', 'skills'));
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
            'photo' => 'file|mimes:jpeg,bmp,png|max:5000',
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if (!$validator) {
            return redirect()->back()->withErrors('اطلاعات وارد شده اشتباه است');
        } else {
            $file = request()->file('photo');
            if ($file) {
                $old_photo = \request('old_pic');
                //Move Upload File
                $photo = $file->move('images/workSample', $old_photo);
            }

            // store
            $workSample = WorkSample::find($id);


            $workSample->name = Input::get('name');
            if ($file) {
                $workSample->photo = $photo;
            }
            $workSample->save();

            $workSample->category()->sync(request('category_id'));
            $workSample->skills()->sync(request('skill_id'));

            // redirect
            return redirect()->route('work-sample')->with('success', 'پروفایل شما با موفقیت اصلاح شد');
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
        $workSample = WorkSample::find($id);
        if ($workSample->photo) {
            unlink(public_path($workSample->photo));
        }
        if ($workSample->delete()) {
            $workSample->category()->detach(request('category_id'));
            $workSample->skills()->detach(request('skill_id'));
            return redirect()->back()->with('success', 'نمونه کار با موفقیت حذف شد');
        }

        return redirect()->back()->withErrors('متاسفانه نمونه کار حذف نشد');
    }
}
