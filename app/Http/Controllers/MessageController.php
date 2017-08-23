<?php

namespace App\Http\Controllers;

use App\Mail\Reply;
use App\Model\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mockery\Exception;

/**
 * Class MessageController
 * @package App\Http\Controllers
 */
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Messages::all();
        return view('admin.pages.message.message', compact('messages'));
    }

    /**
     * Save user Messages
     */
    public function save(Request $request)
    {
        $this->validate($request, [
           'name' => 'required|min:3|max:40|regex:/^[\pL\s\-\0-9]+$/u',
           'email' => 'required|email',
           'message' => 'required|min:3|max:120|regex:/^[\pL\s\-\0-9]+$/u',
        ]);
        $data = Messages::create([
           'name' => $request->input('name'),
           'email' => $request->input('email'),
           'message' => $request->input('message'),
        ]);

        if ($data) {
            return redirect()->back()->with('success', 'با سپاس ارسال شد');
        }
        return redirect()->back()->with('error', 'ارسال نشد');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Messages $message)
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'email' => 'email',
           'answer' => 'required',
        ]);

        $data = $request->all();
        try {
            Mail::to($data['email'])->send(new Reply($data['answer']));

            return redirect()->back()->with('success', 'پیغام شما ارسال شد');
        } catch (Exception $e) {
            return redirect()->back()->with('errors', 'متاسفانه پیغام شما ارسال نشد');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Messages $message)
    {
        return view('admin.pages.message.showMessage', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Messages $message)
    {
        return view('admin.pages.message.createMessage', compact('message'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
