<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function registration ()
    {
        return view('auth.register');
    }

    public function userDashboard()
    {
        return view('dashboard-two');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function login()
    {
        return view('auth.login');
    }


    public function registrationSubmit (Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required',
        ]);


        User::saveUserData($request);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials))
        {
            if (Auth::user()->access_label == 1)
            {
                return redirect()->intended('dashboard')->with('message', 'signed in successfully');
            }
            else {
                return redirect()->intended('dashboard-two')->with('message', 'signed in successfully');
            }
        }

        return redirect('/login')->with('error', 'login details are not valid');
    }


    public function loginSubmit(Request $request)
    {
        $request->validate([
//           'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $userCheck = User::where('email', $request->email)->exists();
        if ($userCheck)
        {
            $user = User::where('email', $request->email)->first();
            if (Hash::check($request->password, $user->password))
            {
                $request->offsetSet('email', $user->email);
                $credentials = $request->only('email', 'password');
                if (Auth::attempt($credentials))
                {
                    if (Auth::user()->access_label == 1)
                    {
                        return redirect()->intended('dashboard')->with('message', 'logged in successfully');
                    }
                    else {
                        return redirect()->intended('dashboard-two')->with('message', 'logged in successfully');
                    }
                }
            }
            else {
                return redirect()->back()->with('error', 'password not matched');
            }
        }
        return redirect()->back()->with('error', 'email is not registered');
    }

    public function logout (Request $request)
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

}
