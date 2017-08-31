<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumForm;
use App\Model\Album;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

/**
 * Class AlbumController
 * @package App\Http\Controllers
 */
class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all()->sortByDesc('created_at');
        return view('admin.pages.album.album', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.album.createAlbum');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlbumForm $form)
    {
        $form->process();
        return redirect()->route('album')->with('success', 'عکس شما با موفقیت ساخته شد');
    }


    public function show($id)
        {
            Album::findOrFail($id);
        }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::find($id);
        return view('admin.pages.album.update', compact('album'));
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
            'photo' => 'required|file|mimes:jpeg,bmp,png|max:5000|nullable',
        );

        $validator = Validator::make(Input::all(), $rules);
        $album = Album::find($id);

        // process the login
        if (!$validator) {
            return redirect()->back()->withErrors('اطلاعات وارد شده اشتباه است');
        } else {
            $file = request()->file('photo');
            if ($file) {
                $old_photo = \request('old_pic');
                //Move Upload File
                $photo = $file->move('images/album', $old_photo);
                $album->photo = $photo;
            }

            // store
            $album->save();
            // redirect
            return redirect()->route('album')->with('success', 'عکس شما با موفقیت اصلاح شد');
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
        $album = Album::find($id);
        if ($album->photo) {
            unlink(public_path($album->photo));
        }
        if ($album->delete()) {
            return redirect()->back()->with('success', 'عکس با موفقیت حذف شد');
        }

        return redirect()->back()->withErrors('متاسفانه عکس حذف نشد');
    }
}
