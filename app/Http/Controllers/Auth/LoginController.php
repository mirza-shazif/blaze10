<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     *
     * protected $redirectTo = '';
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login()
    {
      return view('user.login');
    }




    public function unverified() {
      if(session('message')) {
        return view("user.unverified-user");
      } else {
        return redirect(route('user.login'));
      }
    }

    public function verify_user(Request $request, $user_id, $token) {
      if($user_id !== null || $token !== null) {
        $user = User::find($user_id);
        if($user !== null) {
          $user = $user->first();
          if($user->verified == 0) {
            if($user->verification_token == $token) {
              //show password form
              return redirect(route("user.unverified"))->with("message", "Token matched.")->with("user_id", $user_id);
            } else {
              return redirect(route("user.unverified"))->with("message", "The token you are using is invalid.");
            }
          } else {
            //user already verified
            return redirect(route("user.unverified"))->with("message", "You are already verified.");
          }
        } else {
          //user is null
          return redirect(route('user.login'));
        }
      } else {
        return redirect(route('user.login'));
      }
    }
}
