<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NavigationController extends Controller
{
  public function dashboard() {
    return view('admin.dashboard');
  }

  public function challenges() {
    return view('admin.challenges');
  }


  public function users() {
    return view('admin.users');
  }
}
