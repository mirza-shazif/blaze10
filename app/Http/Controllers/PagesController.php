<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;

class PagesController extends Controller {


  public function create_post(Request $request) {

    $user_id = Auth::id();
    $media_caption = $request->file('media_caption');
    $media = $request->file('media')->store('users/avatars');

    $post = new Post([
      'media_caption' => $media_caption,
      'media' => $media,
      'user_id' => $user_id
    ]);
    $post->save();
    return redirect()->back();
  }

  public function wall() {
    $posts = Post::all();
    return view('wall', ['posts'=>$posts]);
  }


}
