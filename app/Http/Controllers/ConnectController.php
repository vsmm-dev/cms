<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConnectController extends Controller
{
    public function getLogin(){
        return view('connect.login');
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
            'cpassword' => 'required|same:password'
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()) {
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger');
        }

        return view('connect.register');
    }
}
