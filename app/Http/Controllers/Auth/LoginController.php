<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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

    public function authenticate(Request $request)
    {
        $validadtedData = $request->validate([
            'email'=> ['required','email','max:100'],
            'password'=> ['required','max:100']
        ]);

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            echo 'Si estoy en la base';
        }else{
            echo 'no es estoy en la base';
        }
    }

}
