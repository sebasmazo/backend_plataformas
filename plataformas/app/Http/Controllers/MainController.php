<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validate;
use Illuminate\Support\Facades\Auth;
class MainController extends Controller
{
    function index(){
        return view('login');
    }
    function checklogin(Request $request){
        $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|alphaNum|min:3|password',
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );
        if(Auth::attempt($user_data)){
            
            return redirect()->intended('index');
        }else{
            return back()->with('error', 'Error en login');
        }
    }
    function successlogin(){
        return view('index');
    }
    function logout(){
        Auth::logout();
        return redirect('login');
    }

}
