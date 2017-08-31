<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationForm;
use App\Model\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

/**
 * Class EducationController
 * @package App\Http\Controllers
 */
class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Education::all()->sortByDesc('created_at');
        return view('admin.pages.education.education', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.education.createEducation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(EducationForm $form)
    {
        $form->process();
        return redirect()->route('education');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Education::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $education = Education::find($id);
        return view('admin.pages.education.update', compact('education'))->renderSections()['content'];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'university_name' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'field' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'tendency' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'logo' => 'file|mimes:jpeg,bmp,png|max:5000|nullable',
            'start_date' => 'required',
            'finish_date' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        // process the login
        if (!$validator) {
            return redirect()->back()->withErrors('اطلاعات وارد شده اشتباه است');
        } else {
            $file = request()->file('logo');
            if (!empty($file)) {
                //Change File name
                $old_photo =\request('old_pic');
                //Move Upload File
                $photo = $file->move('images/education', $old_photo);
            }elseif(\request('old_pic') == null){
                $old_photo = \request('old_pic');
                $this->deletePhoto($old_photo);

                $education = Education::find($id);
                $education->logo = null;
                $education->save();
            }

            $certificate = Education::find($id);

            $certificate->university_name = Input::get('university_name');
            $certificate->field = Input::get('field');
            $certificate->university_name = Input::get('university_name');
            $certificate->tendency = Input::get('tendency');
            if ($file) {
                $certificate->logo = $photo;
            }
            $certificate->start_date = Input::get('start_date');
            $certificate->finish_date = Input::get('finish_date');

            $certificate->save();

            // redirect
            return redirect()->route('education')->with('success', 'تحصیلات شما با موفقیت اصلاح شد');
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
        $education = Education::find($id);
        if ($education->photo) {
            $this->deletePhoto($education->photo);
        }
        if ($education->delete()) {
            return redirect()->back()->with('success', 'تحصیلات با موفقیت حذف شد');
        }

        return redirect()->back()->withErrors('متاسفانه تحصیلات حذف نشد');
    }

    private function deletePhoto($photo)
    {
        if(file_exists(public_path($photo))){
            @unlink(public_path($photo));
        }
    }
}
