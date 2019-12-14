<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Rules\ContrasenaFuerte;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('register');
    }

    protected function validator(Request $request)
    {
        return $validadtedData = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'password' => ['required', new ContrasenaFuerte],
            'password_confirmation' => ['required','string', 'min:8', 'same:password'],
        ]);
    }

    protected function create(Request $request)
    {
        $validadtedData = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'password' => ['required', new ContrasenaFuerte],
            'password_confirmation' => ['required','string', 'same:password'],
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password= Hash::make($request->password);
        $user->tried = 0;
        $user->password_lock = false;

        $saveControl = $user->save();

        if($saveControl === true){
            $type = 'successRegister';
            $message = 'Usuario registrado correctamente. Realize el login, clicando en el logo Reinke.';
        }else{
            $type = 'errorRegister';
            $message = 'Problemas al registrar usuario';
        }

        return redirect('registro')->with($type, $message);
    }
}
