<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validate;
use Illuminate\Support\Facades\Auth;
class MainController extends Controller
{
    function index(){
        return view('inicio');
    }
    function checklogin(Request $request){
        
        
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
        return redirect()->intended('index');
    }
    function logout(){
        Auth::logout();
        return redirect('inicio');
    }

}
