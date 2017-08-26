<?php

namespace App\Http\Controllers;

use App\Http\Requests\CertificateForm;
use App\Model\Certification;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

/**
 * Class CertificationController
 * @package App\Http\Controllers
 */
class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = Certification::all();
        return view('admin.pages.certificate.certificate', compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.certificate.createCertificate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CertificateForm $form)
    {
        $form->process();
        return redirect()->route('certification');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Certification::findOrfail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certificate = Certification::find($id);
        return view('admin.pages.certificate.update', compact('certificate'))
            ->renderSections()['content'];
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
            'info' => 'required|min:3',
            'photo' => 'file|mimes:jpeg,bmp,png|max:5000|nullable',
            'type' => 'required|min:3',
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
                $photo = $file->move('images/certificate', $old_photo);
            } elseif(\request('old_pic') == null){
                $old_photo = \request('old_pic');
                $this->deletePhoto($old_photo);

                $certification = Certification::find($id);
                $certification->photo = null;
                $certification->save();
            }
            // store
            $certificate = Certification::find($id);

            $certificate->name = Input::get('name');
            $certificate->info = Input::get('info');
            if ($file) {
                $certificate->photo = $photo;
            }
            $certificate->type = Input::get('type');

            $certificate->save();

            // redirect
            return redirect()->route('certification')->with('success', 'گواهی شما با موفقیت اصلاح شد');
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
        $certificate = Certification::find($id);
        if ($certificate->photo) {
            $this->deletePhoto($certificate->photo);
        }
        if ($certificate->delete()) {
            return redirect()->back()->with('success', 'گواهی با موفقیت حذف شد');
        }

        return redirect()->back()->withErrors('متاسفانه گواهی حذف نشد');
    }


    public function deletePhoto($photo)
    {
        if (file_exists(public_path($photo))) {
            @unlink(public_path($photo));
        }
    }
}
