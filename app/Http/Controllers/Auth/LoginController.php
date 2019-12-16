<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
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

        $credentials = array(
            'email' => $request->email,
            'password' => $request->password,
            'password_lock' => 0
        );
        $email = $request->email;
        if (Auth::attempt($credentials)) {
            $attempts = session()->get('accumulator', 1);
            return redirect()->intended('datos');
        }else{
            $attempts = session()->get('accumulator', 1); // Get attemps, default: 1
            session()->put('accumulator', $attempts + 1); // Add attemps session.
            if($attempts >= 3)
            {
                $controlSave = User::where('email', '=', $email)->update(['password_lock' => true]);
                return redirect()->back()->with('status','Tu cuenta a sido bloqueada por motivos de seguridad, contacte al administrador');
            }
            return redirect()->back()->with('status','Contraseña invalida, número de intentos :'.$attempts);          
        }
    }

    protected function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
