<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypesForm;
use App\Model\SkillType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

/**
 * Class TypeController
 * @package App\Http\Controllers
 */
class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = SkillType::all();
        return view('admin.pages.types.types', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypesForm $form)
    {
        $form->process();
        return redirect()->route('type')->with('success', 'مهارت شما با موفقیت ساخته شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        SkillType::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skills = SkillType::find($id);
        return view('admin.pages.types.update', compact('skills'))->renderSections()['content'];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $rules = array(
            'name' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
        );


        $validator = Validator::make(Input::all(), $rules);
        // process the login
        if (!$validator) {
            return redirect()->back()->withErrors('اطلاعات وارد شده اشتباه است');
        } else {
            // store
            $skills = SkillType::find($id);
            $skills->name = Input::get('name');
            $skills->save();

            // redirect
            return redirect()->route('type')->with('success', 'مهارت شما با موفقیت اصلاح شد');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = SkillType::find($id);
        if ($type->delete()) {
            return redirect()->back()->with('success', 'مهارت شما با موفقیت حذف شد');
        }

        return redirect()->back()->withErrors('متاسفانه مهارت شما حذف نشد');
    }
}
