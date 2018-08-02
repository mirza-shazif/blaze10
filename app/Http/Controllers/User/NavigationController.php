<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Challenge;

class NavigationController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }





  public function home() {

    $challenge=Challenge::all();
    return view('user.home',compact('challenge'));
  }

  public function settings() {
      $user=User::find(1)->get();

    return view('user.settings',compact('user'));
  }

  public function explore() {
    return view('user.explore');
  }

  public function page2() {
    return view('user.page2');
  }

  public function profile() {
        $user=User::find(1)->get();
    return view('user.profile',compact('user'));
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
