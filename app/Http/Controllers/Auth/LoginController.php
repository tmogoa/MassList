<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'password' => 'required',
        ]);

        if(!Auth::attempt($request->only('firstname', 'password'), $request->remember)){
            return back()->with('status', "Invalid login credentials.");
        }

        return redirect()->route('dashboard');
    }
}
