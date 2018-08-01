<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Challenge;
class ChallengeController extends Controller
{
  public function index(Request $request)
  {
    $img=$request->image->store('public');
    $video=$request->video->store('public');
  $challenge=new Challenge;
  $challenge->text=$request->challange;
  $challenge->img=$img;
  $challenge->video=$video;
  $challenge->user_id=1;
  $challenge->save();
  return redirect()->back();
  }
}
