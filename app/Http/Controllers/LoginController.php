<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {

    if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
    {
      return 'yes';
    }
    else {
      return 'no';
    }

    }
}