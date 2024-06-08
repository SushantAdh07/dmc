<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    
    public function userLogout(Request $request){
        Auth::guard('web')->logout();
        return redirect('/login');
    }
}
