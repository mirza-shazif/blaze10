<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Challenge;
use App\Comment;
class ChallengeController extends Controller {


  public function create(Request $request) {
    $media_caption = $request->input("media_caption");
    $media = $request->file("media")->store("users/challenges");
    $user_id = Auth::id();

    $challenge = new Challenge(array(
      "media_caption" => $media_caption,
      "media" => $media,
      "user_id" => $user_id
    ));

    $challenge->save();

    return redirect()->back();
  }


public function post_comment(Request $request)
{
  $comment=new Comment(array(
    'challenge_id'=>$request->challenge_id,
    'user_id'=>$request->user_id,
    'comment'=>$request->comment
  ));
  $comment->save();

  return redirect()->back();
}

}
