<?php

namespace App\Http\Controllers;

use App\Model\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index()
    {
        if (Auth::check()) {
            $profiles = Profile::all();
            return view('admin.pages.profile.profile',compact('profiles'));
        }

        return redirect()->route('login');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login()
    {
        return view('admin.auth.login');
    }

    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);

        if (!Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password')]
        )) {
            return back()->withErrors([
                'message' => 'اطلاعات وارد شده نادرست است.'
            ]);
        }
        $profiles = Profile::all();
        return view('admin.pages.profile.profile',compact('profiles'));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

}
