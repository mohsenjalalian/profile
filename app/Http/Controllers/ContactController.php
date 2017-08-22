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

    public static function toPersianNum($number)
    {
        $number = str_replace("1","۱",$number);
        $number = str_replace("2","۲",$number);
        $number = str_replace("3","۳",$number);
        $number = str_replace("4","۴",$number);
        $number = str_replace("5","۵",$number);
        $number = str_replace("6","۶",$number);
        $number = str_replace("7","۷",$number);
        $number = str_replace("8","۸",$number);
        $number = str_replace("9","۹",$number);
        $number = str_replace("0","۰",$number);
        return $number;
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
        Contacts::findOrFail($id);
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
            'email' => 'required|email|min:3',
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
