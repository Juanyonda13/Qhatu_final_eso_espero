<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use GuzzleHttp\Promise\Promise;

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
            $user->password = $request->password;
            $user->perfil_id = 2;
            $user->save();
            $email=User::where('email',$request->email)->first();
            $token= $email->createToken('auth_token')->plainTextToken;
            if($token != null){
                Alert::success('Bienvenido a Qhatu!', 'Gracias por elegirnos');
                return redirect()->route('index');
            }else{
                return 2;
            }
        } else {
            Alert::error('Lo sentimos!', 'El correo ya esta registrado con nosotros');
            return redirect()->route('/register');
        }
    }
}
