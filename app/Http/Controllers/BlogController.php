<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogForm;
use App\Model\Album;
use App\Model\Blog;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    const ALBUM_PATH = 'images/album';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.pages.blog.blog', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.blog.createBlog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(BlogForm $form)
    {

        $form->process();
        return redirect()->route('blog')->with('success', 'بلاگ شما با موفقیت ساخته شد');
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
        $blog = Blog::find($id);
        return view('admin.pages.blog.update', compact('blog'))->renderSections()['content'];
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
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'date' => 'required|min:3',
        );

        $validator = Validator::make(Input::all(), $rules);
        // process the login
        if (!$validator) {
            return redirect()->back()->withErrors('اطلاعات وارد شده اشتباه است');
        } else {
            $blog = Blog::find($id);
            $blog->title = Input::get('title');
            $blog->description = Input::get('description');
            $blog->date = Input::get('date');
            $blog->save();

            $rules = array(
                'photo[]' => 'file|mimes:jpeg,bmp,png|max:5000',
            );
            $validator = Validator::make(Input::all(), $rules);
            if (!$validator) {
                return redirect()->back()->withErrors('اطلاعات وارد شده اشتباه است');
            } else {
                $photos = request()->file('photo');
                if ($photos) {
                    /**
                     * @var $photo UploadedFile
                     */
                    foreach ($photos as $photo_id => $photo) {
                        $image_name = time()."_".$photo->getClientOriginalName();
                        $photo->move(BlogController::ALBUM_PATH, $image_name);
                        Album::updateOrCreate(
                            [
                                'id' => $photo_id
                            ],
                                [
                                    'photo' => $image_name,
                                    'blog_id'=>$id
                                ]
                            );
                    }
                }
            }

            // redirect
            return redirect()->route('blog')->with('success', 'بلاگ شما با موفقیت اصلاح شد');
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
        $blog = Blog::find($id);
        foreach ($blog->album as $value) {
            if ($value->delete()) {
                if ($value->photo && file_exists($value->photo)) {
                    unlink($value->photo);
                }
            }
        }

        if ($blog->delete()) {
            return redirect()->back()->with('success', 'بلاگ با موفقیت حذف شد');
        }

        return redirect()->back()->withErrors('متاسفانه بلاگ حذف نشد');
    }
}
