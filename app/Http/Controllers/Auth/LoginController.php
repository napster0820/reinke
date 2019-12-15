<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'datos';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('auth.login');
    }

    protected function authenticate(Request $request)
    {
        $validadtedData = $request->validate([
            'email'=> ['required','email','max:100'],
            'password'=> ['required','max:100']
        ]);

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect()->intended('datos');
        }else{
            return redirect('/')->with('errorAccess', 'Usuario o contraseña incorrectos');
        }
    }

    protected function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
