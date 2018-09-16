<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LogoutController extends Controller
{
    //
    public function logout(){


            Auth::logout();
            return redirect('/')->with('Status','You have been successfully Logged out');

    }
}