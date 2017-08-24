<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillForm;
use App\Model\Skills;
use App\Model\SkillType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

/**
 * Class SkillsController
 * @package App\Http\Controllers
 */
class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skills::all();
        $types = SkillType::all();
        return view('admin.pages.skills.skills', compact('skills', 'types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //        return view('admin.pages.skills.createSkills');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SkillForm $form)
    {
        $form->process();
        return redirect()->route('skills')->with('success', 'مهارت شما با موفقیت ساخته شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Skills::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skills = Skills::find($id);
        $types = SkillType::all();
        return view('admin.pages.skills.update', compact('skills','types'))->renderSections()['content'];
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
            'name' => 'required|min:3|regex:/^[\pL\s\-\0-9]+$/u',
            'point' => 'required',
        );


        $validator = Validator::make(Input::all(), $rules);
        // process the login
        if (!$validator) {
            return redirect()->back()->withErrors('اطلاعات وارد شده اشتباه است');
        } else {
            // store
            $skills = Skills::find($id);
            $skills->type_id = Input::get('type_id');
            $skills->name = Input::get('name');
            $skills->point = Input::get('point');

            $skills->save();

            // redirect
            return redirect()->route('skills')->with('success', 'مهارت شما با موفقیت اصلاح شد');
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
        $skills = Skills::find($id);
        if ($skills->delete()) {
            return redirect()->back()->with('success', 'مهارت شما با موفقیت حذف شد');
        }

        return redirect()->back()->withErrors('متاسفانه مهارت شما حذف نشد');
    }
}
