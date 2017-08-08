<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationForm;
use App\Http\Requests\WorkExperienceForm;
use App\Model\Recommendation;
use App\Model\WorkExperince;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

/**
 * Class WorkExperienceController
 * @package App\Http\Controllers
 */
class WorkExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workExperiences = WorkExperince::all();
        return view('admin.pages.workExperience.workExperience', compact('workExperiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.workExperience.createWorkExperience');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkExperienceForm $form)
    {
        $form->process();
        return redirect()->route('work-experience');
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
        $work = WorkExperince::find($id);
        return view('admin.pages.workExperience.update', compact('work'));
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
            'title' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'company' => 'required',
            'city' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'start_date' => 'required',
            'finish_date' => 'required',
            'about' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
        );

        $validator = Validator::make(Input::all(), $rules);
        // process the login
        if (!$validator) {
            return redirect()->back()->withErrors('اطلاعات وارد شده اشتباه است');
        } else {
            $certificate = WorkExperince::find($id);

            $certificate->title = Input::get('title');
            $certificate->company = Input::get('company');
            $certificate->city = Input::get('city');
            $certificate->start_date = Input::get('start_date');
            $certificate->finish_date = Input::get('finish_date');
            $certificate->about = Input::get('about');

            $certificate->save();

            // redirect
            return redirect()->route('work-experience')->with('success', 'تجارب کاری  شما با موفقیت اصلاح شد');
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
        $work = WorkExperince::find($id);
        if ($work->delete()) {
            return redirect()->back()->with('success', 'تجارب کاری با موفقیت حذف شد');
        }

        return redirect()->back()->withErrors('متاسفانه تجارب کاری حذف نشد');
    }


}
