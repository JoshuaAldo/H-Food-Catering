<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class forgetPassController extends Controller
{
    use SendsPasswordResetEmails;

    public function index()
    {
        return view('forgetPass',[ "title" => "Forget Password"]);
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? redirect()->back()->with('status', __($status))
            : redirect()->back()->withErrors(['email' => __($status)]);
    }

    public function showResetForm(Request $request)
    {
        return view('resetPass', ['token' => $request->token, 'email' => $request->email, 'title' => 'Reset Password']);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password)
                ])->save();
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : redirect()->back()->withErrors(['email' => __($status)]);
    }
}
