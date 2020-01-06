<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            'email'=> ['required','string','email','max:100'],
            'password'=> ['required','string','max:255']
        ]);

        $user_email = $request->email;
        $user_password = $request->password;

        if (Auth::attempt(['email' => $user_email, 'password' => $user_password, 'password_lock' => '0'])) {
            $attempts = session()->get('accumulator', 1);
            return redirect()->intended('datos');
        }else{
            $email = $request->email;
            $check_exist_email = DB::table('users')->where('email', $email)->value('email');

            if($check_exist_email != null)
            {
                $attempts = session()->get('accumulator', 1); // Get attemps, default: 1
                session()->put('accumulator', $attempts + 1); // Add attemps session.
                if($attempts >= 3)
                {
                    $controlSave = User::where('email', '=', $email)->update(['password_lock' => true]);
                    return redirect()->back()->with('status','Tu cuenta a sido bloqueada por motivos de seguridad, contacte al administrador');
                }else{
                    return redirect()->back()->with('status','Usuario o contraseña invalidos, número de intentos :'.$attempts);
                }
            }else{
                return redirect()->back()->with('status','Usuario o contraseña invalidos');   
            }     
        }
    }

    protected function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
