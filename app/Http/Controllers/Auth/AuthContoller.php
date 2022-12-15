<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use GuzzleHttp\Promise\Promise;
use Illuminate\Support\Facades\Auth;
use Hash;
class AuthContoller extends Controller
{
    //
    public function register()
    {
        return view('Auth.auth');
    }
    public function registerStore(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $email = User::where('email', $request->email)->first();
        if ($email == null) {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password =Hash::make($request->password);
            $user->perfil_id = 2;
            $user->save();
            $credentials = $request->only('email', 'password');
            Auth::attempt($credentials);
            Alert::success('Bienvenido a Qhatu!', 'Gracias por elegirnos');
            return redirect()->intended('index');
        } else {
            Alert::error('Lo sentimos!', 'El correo ya esta registrado con nosotros');
            return redirect()->route('/register');
        }
    }

    public function login(Request $request){
       
        if($request->filled(['email','password'])){
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->intended('index');
            }else {
                Alert::error('Lo sentimos!', '');
                return redirect()->route('/register');
            }
        }else{
            return 2;
        }


     }
}