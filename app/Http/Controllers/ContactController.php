<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactForm;
use App\Model\Contacts;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

/**
 * Class ContactController
 * @package App\Http\Controllers
 */
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contacts::all();
        return view('admin.pages.contact.contact', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.contact.createContact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ContactForm $form)
    {
        $form->process();
        return redirect()->route('contact');
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
        $contact = Contacts::find($id);
        return view('admin.pages.contact.update', compact('contact'));
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
            'email' => 'required|email|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'phone_number' => 'required|min:5|integer',
            'mobile' => 'required|min:5|integer',
            'office_number' => 'required|min:5|integer',
            'qr_code' => 'file|mimes:jpeg,bmp,png|max:5000',
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if (!$validator) {
            return redirect()->back()->withErrors('اطلاعات وارد شده اشتباه است');
        } else {
            $file = request()->file('qr_code');
            if ($file) {
                $old_photo = \request('old_pic');
                //Move Upload File
                $photo = $file->move('images/contact', $old_photo);
            }

            // store
            $profile = Contacts::find($id);

            $profile->email = Input::get('email');
            $profile->phone_number = Input::get('phone_number');
            $profile->mobile = Input::get('mobile');
            $profile->office_number = Input::get('office_number');
            if ($file) {
                $profile->qr_code = $photo;
            }
            $profile->save();

            // redirect
            return redirect()->route('contact')->with('success', 'پروفایل شما با موفقیت اصلاح شد');
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
        $contact = Contacts::find($id);
        if ($contact->photo) {
            unlink(public_path($contact->photo));
        }
        if ($contact->delete()) {
            return redirect()->back()->with('success', 'راه های ارتباطی با موفقیت حذف شد');
        }

        return redirect()->back()->withErrors('متاسفانه راه های ارتباطی حذف نشد');
    }
}
