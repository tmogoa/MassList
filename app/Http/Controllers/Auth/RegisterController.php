<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|max:255|unique:users',
            'surname' => 'required|max:255',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'firstname' => $request->firstname,
            'surname' => $request->surname,
            'password' => Hash::make($request->password),
        ]);

        Auth::attempt($request->only('firstname', 'password'));

        return redirect()->route('dashboard');
    }
}
