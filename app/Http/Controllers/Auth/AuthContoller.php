<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class AuthContoller extends Controller
{
    //
    public function register(){
      return view('Auth.auth');
    }
    public function registerStore(Request $request){
         $Validator=request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password'=>'required'
        ]);

        if(isset($Validator)){
            $user=new User();
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password=$request->password;
            $user->perfil_id=2;
            $user->save();
            Alert::success('Bienvenido a Qhatu!','Gracias por elegirnos');
            return redirect()->route('index');
        }else{
            Alert::error('incompleto!','por favor ingresa todos los campos');
            return redirect()->route('/');
        }

        

         
    }
}
