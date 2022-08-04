<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ConnectController extends Controller
{
    public function getLogin(){
        return view('connect.login');
    }
    public function postLogin(Request $request){
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->onlyInput('email');
        else:
            if(Auth::attempt(['email' => $request->input('email'),'password' => $request->input('password')],true)):
                return redirect('/');
            else:
                return back()->with('message','Correo electrónico o contraseña erronea')->with('typealert','danger')->onlyInput('email');
            endif;
        endif;
    }
    public function getLogout(){
        Auth::logout();
        return redirect('/login');
    }
    public function getRegister(){
        return view('connect.register');
    }
    public function postRegister(Request $request){
        $rules = [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:App\Models\User,email',
            'password' => 'required|min:8',
            'cpassword' => 'required|min:8|same:password'
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger');
        else:
            $user = new User;
            $user->name = e($request->input('name'));
            $user->lastname = e($request->input('lastmane'));
            $user->email = e($request->input('email'));
            $user->password = Hash::make($request->input('password'));

            if($user->save()):
                return redirect('/login')->with('message','Creado con exito, Ahora inicie sesión')->with('typealert','success');
            endif;
        endif;

        return view('connect.register');
    }
}
