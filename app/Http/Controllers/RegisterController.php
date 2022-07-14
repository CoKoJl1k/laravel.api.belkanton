<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index()
    {
        return view('registration');
    }

    public function save(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|max:255',
            'password' => 'required'
        ]);

        $user = User::create(['name'=> $request->name,
            'email' => $request->email,
            'email_verified_at' => now(),
            'password'=> Hash::make($request->password)]);

        session()->flash('success', 'Вы успешно зарегистрировались!' );
        //dd($request->all());
        Auth::login($user);
        return redirect()->route('main');
    }
}
