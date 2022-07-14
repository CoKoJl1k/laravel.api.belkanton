<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request): \Illuminate\Http\RedirectResponse
    {

        if (Auth::attempt(['email' => $request->email , 'password'=> $request->password])) {
            session()->flash('success' , 'Вы успешно вошли.' );
            //dd($request->all());

            if (auth()->user()->status == 'admin'){
                return redirect()->route('dashboard');
            } else {
                session()->flash('success' , 'Вы успешно вошли.' );
                return redirect()->route('main');
            }

        } else {
            $errors = ["data_has_not_been_delete" => "Email или пароль неправильный!"];
            return redirect()->route('login')->withErrors($errors);
            ///return redirect()->route('login', ['errors' => 'Incorrect password or email']);
        }
    }

    public function logout(Request $request): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();
        //session()->flash('success' , 'Вы успешно вышли');
        return redirect()->route('main');
        //return view('login');
    }

}
