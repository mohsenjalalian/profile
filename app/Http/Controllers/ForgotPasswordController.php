<?php

namespace App\Http\Controllers;

//Trait
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;


    public function showLinkRequestForm()
    {
        return view('admin.auth.forgetPassword');
    }

    //Password Broker for Seller Model
    public function broker()
    {
        return Password::broker('users');
    }
}
