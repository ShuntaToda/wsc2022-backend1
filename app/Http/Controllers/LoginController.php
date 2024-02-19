<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $reqest){
        return view("login");
    }

    public function login(Request $reqest){
        $check = $reqest->only("name","password");
        if(Auth::attempt($check)){
            session()->regenerate();
            return redirect()->route("admin.home");
        }

        return redirect()->route("login")->with(["message"=> "There is a typing error."]);
    }
}
