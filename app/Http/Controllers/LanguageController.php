<?php

namespace App\Http\Controllers;

use App\Http\Requests\LanguageForm;
use App\Model\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

/**
 * Class LanguageController
 * @package App\Http\Controllers
 */
class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::all();
        return view('admin.pages.language.language', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.language.createLanguage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(LanguageForm $form)
    {
        $form->process();
        return redirect()->route('language');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Language::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $language = Language::find($id);
        return view('admin.pages.language.update', compact('language'))
            ->renderSections()['content'];
            ;
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
            'reading' => 'required',
            'writing' => 'required',
            'speaking' => 'required',
            'listening' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        // process the login
        if (!$validator) {
            return redirect()->back()->withErrors('اطلاعات وارد شده اشتباه است');
        } else {
            // store
            $language = Language::find($id);
            $language->name = Input::get('name');
            $language->reading = Input::get('reading');
            $language->writing = Input::get('writing');
            $language->speaking = Input::get('speaking');
            $language->listening = Input::get('listening');
            $language->save();

            // redirect
            return redirect()->route('language')->with('success', 'زبان شما با موفقیت اصلاح شد');
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
        $docs = Language::find($id);
        if ($docs->delete()) {
            return redirect()->back()->with('success', 'زبان با موفقیت حذف شد');
        }

        return redirect()->back()->withErrors('متاسفانه زبان حذف نشد');
    }
}
