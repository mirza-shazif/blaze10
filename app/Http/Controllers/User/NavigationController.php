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
    $challenges = Challenge::all();
    return view('user.home', compact('challenges'));
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



}
