<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\User;
class UserController extends Controller
{
    function index(){
        return view('register');
    }
    function checkreg(Request $request){
        $user = User::create(request(['name','email','password']));
        Auth::login($user);
        return redirect()->intended('index');
    }
    
}
